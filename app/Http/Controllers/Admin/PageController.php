<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageCategory;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::where('slug', '<>', 'about')->get();
        return view('admin.page.index', compact('data'));
    }

    public function about()
    {
        $row = Page::where('slug', 'about')->firstOrFail();
        return view('admin.page.show', compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new Page;
        $is_link = true;
        $categories = PageCategory::where('status', 1)->get();
        $categories = $categories->pluck('title_lang', 'id');
        return view('admin.page.create', compact('row', 'categories', 'is_link'));
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
            'link' => 'required_with:is_link',
            'content' => 'required_without:is_link',
        ]);
        $is_link = $request->get('is_link');
        $row = Page::create($request->all());
        
        if(!$is_link)
        {
            $description = $row->description;
            if(!$description['ru'] && $row->content['ru']){
                $description['ru'] = mb_substr(strip_tags(html_entity_decode($row->content['ru'])), 0, 152).'...';
            }
            if(!$description['en'] && $row->content['en']){
                $description['en'] = mb_substr(strip_tags(html_entity_decode($row->content['en'])), 0, 152).'...';
            }
            $row->description = $description;
            $row->link = null;
        }
        $row->save();


        if(!$row->user_id){
            $row->user_id =  auth()->user()->id;
            $row->save();
        }

        $message = trans('t.saved_successfully');

        if($row){
            toast($message,'success','top-right');
            // dd($request->get('to_facebook'));
            // if($request->get('to_facebook')){
                //     $row->notify(new PostPublished);
            // }
            return redirect()->route('admin.page.show', $row);
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
        $row = Page::findOrFail($id);

        $category = PageCategory::get();

        $categories = $category->sortBy('id')->pluck('title','id')->toArray();

        return view('admin.page.show',compact('row', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Page::findOrFail($id);
        $is_link = $row->link ? true : false;
        $categories = PageCategory::where('status', 1)->get();
        $categories = $categories->pluck('title_lang', 'id');
        return view('admin.page.edit', compact('row', 'categories', 'is_link'));
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
            'link' => 'required_with:is_link',
            'content' => 'required_without:is_link',
        ]);
        $row = Page::findOrFail($id);
        $row->update($request->all());
        $is_link = $row->link ? true : false;
        
        if(!$is_link)
        {
            $description = $row->description;
            if(!$description['ru'] && $row->content['ru']){
                $description['ru'] = mb_substr(strip_tags(html_entity_decode($row->content['ru'])), 0, 152).'...';
            }
            if(!$description['en'] && $row->content['en']){
                $description['en'] = mb_substr(strip_tags(html_entity_decode($row->content['en'])), 0, 152).'...';
            }
            $row->description = $description;
            $row->link = null;
        }
        $row->save();


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
            return redirect()->route('admin.page.show', $row);
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
        Page::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.page.index');
    }
}
