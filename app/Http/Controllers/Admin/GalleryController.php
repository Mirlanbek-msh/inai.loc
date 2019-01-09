<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Intervention\Image\ImageManagerStatic as Image;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gallery::all();
        return view('admin.gallery.index', compact('data'));
    }

    public function show($id)
    {
        $row = Gallery::findOrFail($id);
        return view('admin.gallery.show', compact('row'));
    }

    public function toggle($id)
    {
        Gallery::findOrFail($id)->toggleStatus();
        toast(trans('t.status_updated'), 'info', 'top-right');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = new Gallery;
        return view('admin.gallery.create', compact('row'));
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
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        
        $row = Gallery::create($request->all());

        if($request->hasFile('image')){
            $file = $request->file('image');
            $dir  = Gallery::getFilesPath($row->id);
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $thumb_name = 'thumb.jpg';
            $image_name = 'image.jpg';

            $thumb_path = $dir.$thumb_name;
            $image_path = $dir.$image_name;
            
            $thumb = Image::make($file)->fit(383, 356)->encode('jpg')->save($thumb_path);
            $image = Image::make($file)->fit(1280, 720)->encode('jpg')->save($image_path);

            $row->thumb = $thumb_path;
            $row->image = $image_path;
            $row->save();
        }

        $row->save();

        $message = trans('t.saved_successfully');

        if($row){
            toast($message,'success','top-right');
            return redirect()->route('admin.gallery.index');
        }
    }

    public function destroy($id)
    {
        Gallery::findOrFail($id)->delete();
        toast(trans('t.removed_successfully'), 'info', 'top-right');
        return redirect()->route('admin.gallery.index');
    }
}
