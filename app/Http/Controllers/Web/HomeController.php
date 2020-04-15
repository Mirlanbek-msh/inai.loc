<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Event;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->where('lang', app()->getLocale())->orderBy('created_at', 'DESC')->take(6)->get();
        $events = Event::where('status', 1)->orderBy('created_at', 'DESC')->get();
        $selected_date = Input::get('date', date('d-m-Y'));
        $selected_date = Carbon::createFromFormat("d-m-Y", $selected_date);
        $events = $events->filter(function($item) use($selected_date){
            if($item->event_start_date->format('Y-m') == $selected_date->format('Y-m')){
                return $item;
            }
        });
        $banner_posts = Post::where('status', 1)->where('lang', app()->getLocale())->where('to_banner', 1)->orderBy('created_at', 'DESC')->take(5)->get();
        $banner_events = Event::where('status', 1)->where('to_banner', 1)->orderBy('created_at', 'DESC')->take(5)->get();
        return view('web.index', compact('posts', 'events', 'banner_posts', 'banner_events', 'selected_date'));
    }

    public function tag($slug)
    {
        $posts = Tag::where('slug', $slug)->firstOrFail()->posts()->where('status', 1)->orderBy('created_at', 'DESC')->get();
        $events = Tag::where('slug', $slug)->firstOrFail()->events()->where('status', 1)->orderBy('created_at', 'DESC')->get();
        return view('web.tag.show', compact('posts', 'events'));
    }

    public function about()
    {
        $row = Page::where('slug', 'about')->firstOrFail();
        return view('web.about', compact('row'));
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function gallery()
    {
        $data = Gallery::where('status', 1)->orderBy('created_at', 'desc')->paginate(18);
        return view('web.gallery', compact('data'));
    }
}
