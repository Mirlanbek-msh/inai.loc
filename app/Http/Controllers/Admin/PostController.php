<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\PostCategory;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Tag;
use File;


class PostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-list');
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::where('lang', app()->getLocale())->get();
        $data = $data->sortByDesc('created_at');
        $data = $this->paginate($data, 30);
        return view('admin.post.index', compact('data'));
    }

    public function getPostsByPermission()
    {
        $countries = auth()->user()->countries;
        $categories = auth()->user()->categories;
        $categoryPosts = collect();
        foreach($categories as $category)
        {
            $categoryPosts = $categoryPosts->merge($category->posts);
        }
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new Post;
        $categories = PostCategory::where('status', 1)->get();
        $categories = $categories->pluck('title', 'id');
        $tags = Tag::where('status', 1)->where('lang', app()->getLocale())->get();
        $tagsStr = json_encode($tags->pluck('title')->toArray());
        return view('admin.post.create', compact('row', 'categories', 'tagsStr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            // 'description' => '',
            'content' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'file.*' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $row = Post::create($request->all());
        if(!$row->description){
            $row->description = mb_substr(strip_tags(html_entity_decode($row->content)), 0, 152).'...';
            $row->save();
        }
        
         // Tags
        $tags = $request->input('tags');
        
        if($tags){
            $tags = explode(',', $tags);
      
            foreach ($tags as $key => $title)
            {
                if(!is_numeric($title) && !empty($title))
                {
                    $tag = Tag::firstOrNew(['title' => $title]);
                    $tag->title = $title;
                    $tag->save();
                    $tags[$key] = $tag->id;
                }
            }
            $row->tags()->sync($tags);
        }

        if($request->hasFile('image')){
            $file = $request->file('image');
            $dir  = 'uploads/posts/'.$row->id.'/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $btw = time();

            $thumb_name = $btw.uniqid().'_thumb.jpg';
            $image_name = $btw.uniqid().'_image.jpg';

            $thumb_path = $dir.$thumb_name;
            $image_path = $dir.$image_name;
            
            $thumb = Image::make($file)->fit(510, 287)->encode('jpg')->save($thumb_path);
            $image = Image::make($file)->fit(1280, 720)->encode('jpg')->save($image_path);

            $row->thumb = $thumb_path;
            $row->image = $image_path;
            $row->save();
        }

        $files = $request->file('files');

        if($files){
            $i = 0;
            foreach($files as $file)
            {
                $i++;
                $dir  = 'uploads/posts/' .$row->id.'/gallery/';
                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
    
                $btw = time();
                $thumb = $btw.uniqid().'_thumb.jpg';
                $full = $btw.uniqid().'.jpg';
                
                Image::make($file)->fit(180, 180)->encode('jpg')->save($dir.$thumb);
                Image::make($file)->resize(1280, 720, function($constraint)
                {
                    $constraint->aspectRatio();
                })->resizeCanvas(1280, 720, 'center', false, '000000')->encode('jpg')->save($dir.$full);

    
                $thumbs = array(
                    'title' => "File $i",
                    'file' => $dir.$thumb
                );
    
                $fulls = array(
                    'title' => "File $i",
                    'file' => $dir.$full
                );
    
                $links['thumbs'][$i] = $thumbs;
                $links['fulls'][$i] = $fulls;
            }
            // dd($links);
            $row->gallery = $links;
            $row->save();
        }

        $row->user_id = auth()->user()->id;
        $row->save();

        $message = trans('t.saved_successfully');

        if($row){
            // if($request->get('to_facebook')){
            //     $row->notify(new PostPublished);
            // }
            toast($message,'success','top-right');
            if($files){
                return response('success', 200);
            }
            return redirect()->route('admin.post.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Post::findOrFail($id);

        $category = PostCategory::get();

        $categories = $category->sortBy('id')->pluck('title','id')->toArray();

        return view('admin.post.show',compact('row', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Post::findOrFail($id);
        $categories = PostCategory::where('status', 1)->get();
        $categories = $categories->pluck('title', 'id');
        $tags = Tag::where('status', 1)->where('lang', app()->getLocale())->get();
        $tagsStr = json_encode($tags->pluck('title')->toArray());
        return view('admin.post.edit', compact('row', 'categories', 'tagsStr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            // 'description' => '',
            'content' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'file.*' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $row = Post::findOrFail($id);
        $row->update($request->all());
        
        if(!$row->description){
            $row->description = mb_substr(strip_tags(html_entity_decode($row->content)), 0, 152).'...';
            $row->save();
        }

        // Tags
        $tags = $request->input('tags');

        if(!empty($tags)){
            $tags = explode(',', $tags);
      
            foreach ($tags as $key => $name)
            {
                if(!is_numeric($name) && !empty($name))
                {
                    $tag = Tag::firstOrNew(['title' => $name]);
                    $tag->title = $name;
                    $tag->save();
                    $tags[$key] = $tag->id;
                }
            }
            $row->tags()->syncWithoutDetaching($tags);
        }

        if($request->hasFile('image')){
            $row->removeOldImages();
            $file = $request->file('image');
            $dir  = 'uploads/posts/'.$row->id.'/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $btw = time();

            $thumb_name = $btw.uniqid().'_thumb.jpg';
            $image_name = $btw.uniqid().'_image.jpg';

            $thumb_path = $dir.$thumb_name;
            $image_path = $dir.$image_name;
            
            $thumb = Image::make($file)->fit(510, 287)->encode('jpg')->save($thumb_path);
            $image = Image::make($file)->fit(1280, 720)->encode('jpg')->save($image_path);

            $row->thumb = $thumb_path;
            $row->image = $image_path;
            $row->save();
        }

        $files = $request->file('files');
        if($row->gallery['fulls']){
            $i =  count($row->gallery['fulls']);
            // $i = 0;
        }else{
            $i = 0;
        }

        if($files){
            // $row->removeOldGallery();
            foreach($files as $file)
            {
                $i++;
                $dir  = 'uploads/posts/' .$row->id.'/gallery/';

                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
    
                $btw = time();
                $thumb = $btw.uniqid().'_thumb.jpg';
                $full = $btw.uniqid().'.jpg';
                
                Image::make($file)->fit(180, 180)->encode('jpg')->save($dir.$thumb);

                Image::make($file)->resize(1280, 720, function($constraint)
                {
                    $constraint->aspectRatio();
                })->resizeCanvas(1280, 720, 'center', false, '000000')->encode('jpg')->save($dir.$full);
    
                $thumbs = array(
                    'title' => "File $i",
                    'file' => $dir.$thumb
                );
    
                $fulls = array(
                    'title' => "File $i",
                    'file' => $dir.$full
                );
    
                $thumbs_uploading[$i] = $thumbs;
                $fulls_uploading[$i] = $fulls;
            }
            if($row->gallery['thumbs']){
                $thumbs_old = $row->gallery['thumbs'];
                $new_thumbs = $thumbs_old+$thumbs_uploading;
            }else{
                $thumbs_old = [];
                $new_thumbs = $thumbs_uploading;
            }

            if($row->gallery['fulls']){
                $fulls_old = $row->gallery['fulls'];
                $new_fulls = $fulls_old+$fulls_uploading;
            }else{
                $fulls_old = [];
                $new_fulls = $fulls_uploading;
            }
            $ready= array("thumbs"=>$new_thumbs)+array("fulls"=>$new_fulls);
            $row->gallery = $ready;
            $row->save();
        }


        if(!$row->user_id){
            $row->user_id =  auth()->user()->id;
            $row->save();
        }

        $message = trans('t.updated_successfully');

        if($row){
            toast($message,'success','top-right');
            // dd($request->get('to_facebook'));
            // if($request->get('to_facebook')){
                //     $row->notify(new PostPublished);
            // }
            if($files){
                return response('success', 200);
            }
            return redirect()->route('admin.post.show', $row);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.post.index');
    }

    
    public function imagesGet($id)
    {
        $row = Post::findOrFail($id);

        $images = $row->gallery['thumbs'];

        $imageAnswer = [];

        if($images){
            foreach ($images as $key => $image) {
                $imageAnswer[] = [
                    'original' => $image['title'],
                    'server' => $image['file'],
                    'size' => File::size($image['file']),
                    'key' => $key
                ];
            }
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }

    public function imageDestroy(Request $request, $id, $file)
    {
        if($request->ajax()) { 
            $row = Post::findOrFail($id);
            $fulls = $row->gallery['fulls'];
            $thumb = $row->gallery['thumbs'];
            $file_full = $fulls[$file]['file'];
            $file_thumb = $thumb[$file]['file'];
            unset($fulls[$file]);
            unset($thumb[$file]);
            $merge = array_merge(array("thumbs"=>$thumb), array("fulls"=>$fulls));            
            $row->gallery = $merge;
            $row->save();
            if($row){
                unlink($file_full);
                unlink($file_thumb);
            }
            return response('success', 200);
        }
     
        
    }

    public function toggle($id)
    {
        Post::findOrFail($id)->toggleStatus();
        toast(trans('t.status_updated'), 'info', 'top-right');
        return redirect()->back();
    }

    /**
     * Gera a paginação dos itens de um array ou collection.
    *
    * @param array|Collection      $items
    * @param int   $perPage
    * @param int  $page
    * @param array $options
    *
    * @return LengthAwarePaginator
    */
    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginator = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        $paginator->withPath(url()->current());
        return $paginator;
    }
}
