<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Tag;
use File;
use function GuzzleHttp\json_decode;

class EventController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:event-list');
         $this->middleware('permission:event-create', ['only' => ['create','store']]);
         $this->middleware('permission:event-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::all();
        $data = $data->sortByDesc('created_at');
        $data = $this->paginate($data, 30);
        return view('admin.event.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new Event;
        $tagsRu = Tag::where('status', 1)->where('lang', 'ru')->get();
        $tagsRuStr = json_encode($tagsRu->pluck('title')->toArray());
        $tagsEn = Tag::where('status', 1)->where('lang', 'en')->get();
        $tagsEnStr = json_encode($tagsEn->pluck('title')->toArray());
        return view('admin.event.create', compact('row', 'tagsRuStr', 'tagsEnStr'));
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
            'author_img' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $row = Event::create($request->all());
        if($request->get('has_end_date')){
            $row->event_date = $request->get('event_date_multi');
        }else{
            $row->has_end_date = 0;
        }

        $description = $row->description;
        if(!$description['ru'] && $row->content['ru']){
            $description['ru'] = mb_substr(strip_tags(html_entity_decode($row->content['ru'])), 0, 152).'...';
        }
        if(!$description['en'] && $row->content['en']){
            $description['en'] = mb_substr(strip_tags(html_entity_decode($row->content['en'])), 0, 152).'...';
        }
        $row->description = $description;
        $row->save();

        if(!$request->get('has_deadline'))
        {
            $row->deadline_date = $row->event_start_date->format('Y-m-d H:i:s');
        }
        
        
        $this->setTags($request, $row);
        $this->setImages($request, $row);

        $row->user_id = auth()->user()->id;
        $row->save();

        $message = trans('t.saved_successfully');

        if($row){
            // if($request->get('to_facebook')){
            //     $row->notify(new PostPublished);
            // }
            toast($message,'success','top-right');
            return redirect()->route('admin.event.index');
        }
    }

    public function setTags($request, $row)
    {
        // Tags
        $tagsRu = $request->input('tags')['ru'];
        if($tagsRu){
            $tags = explode(',', $tagsRu);

            foreach ($tags as $key => $title)
            {
                if(!is_numeric($title) && !empty($title))
                {
                    $tag = Tag::firstOrNew(['title' => $title, 'lang' => 'ru']);
                    $tag->save();
                    $tag->title = $title;
                    $tag->lang = 'ru';
                    $tag->save();
                    $tags[$key] = $tag->id;
                }
            }
            $row->tags()->sync($tags);
        }
        $tagsEn = $request->input('tags')['en'];
        if($tagsEn){
            $tags = explode(',', $tagsEn);

            foreach ($tags as $key => $title)
            {
                if(!is_numeric($title) && !empty($title))
                {
                    $tag = Tag::firstOrNew(['title' => $title, 'lang' => 'en']);
                    $tag->title = $title;
                    $tag->lang = 'en';
                    $tag->save();
                    $tags[$key] = $tag->id;
                }
            }
            $row->tags()->syncWithoutDetaching($tags);
        }
    }

    public function setImages($request, $row)
    {
        if($request->hasFile('image')){
            $file = $request->file('image');
            $dir  = 'uploads/events/'.$row->id.'/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $btw = time();

            $thumb_name = $btw.uniqid().'_thumb.jpg';
            $image_name = $btw.uniqid().'_image.jpg';

            $thumb_path = $dir.$thumb_name;
            $image_path = $dir.$image_name;
            
            $thumb = Image::make($file)->fit(510, 510)->encode('jpg')->save($thumb_path);
            $image = Image::make($file)->fit(1280, 720)->encode('jpg')->save($image_path);

            $row->thumb = $thumb_path;
            $row->image = $image_path;
            $row->save();
        }

        if($request->hasFile('author_img')){
            $file = $request->file('author_img');
            $dir  = 'uploads/events/'.$row->id.'/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $image_name = 'author_image.jpg';

            $image_path = $dir.$image_name;
            
            $image = Image::make($file)->fit(150, 150)->encode('jpg')->save($image_path);

            $row->author_img = $image_path;
            $row->save();
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
        $row = Event::findOrFail($id);
        return view('admin.event.show',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Event::findOrFail($id);
        $tagsRu = Tag::where('status', 1)->where('lang', 'ru')->get();
        $tagsRuStr = json_encode($tagsRu->pluck('title')->toArray());
        $tagsEn = Tag::where('status', 1)->where('lang', 'en')->get();
        $tagsEnStr = json_encode($tagsEn->pluck('title')->toArray());
        return view('admin.event.edit', compact('row', 'tagsRuStr', 'tagsEnStr'));
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
        $request->validate([
            'title' => 'required',
            // 'description' => '',
            'content' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            'author_img' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $row = Event::findOrFail($id);
        $row->update($request->all());

        if($request->get('has_end_date')){
            $row->event_date = $request->get('event_date_multi');
        }else{
            $row->has_end_date = 0;
        }
        
        $description = $row->description;
        if(!$description['ru'] && $row->content['ru']){
            $description['ru'] = mb_substr(strip_tags(html_entity_decode($row->content['ru'])), 0, 152).'...';
        }
        if(!$description['en'] && $row->content['en']){
            $description['en'] = mb_substr(strip_tags(html_entity_decode($row->content['en'])), 0, 152).'...';
        }
        $row->description = $description;
        $row->save();

        if(!$request->get('has_deadline')){
            $row->deadline_date = $row->event_start_date->format('Y-m-d H:i:s');
        }
        
        $this->setTags($request, $row);
        $this->setImages($request, $row);

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
            return redirect()->route('admin.event.show', $row);
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
        Event::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.event.index');
    }

    public function toggle($id)
    {
        Event::findOrFail($id)->toggleStatus();
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
