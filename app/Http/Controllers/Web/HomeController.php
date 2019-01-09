<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Event;
use App\Models\Page;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->where('lang', app()->getLocale())->orderBy('created_at', 'DESC')->paginate(6);
        $events = Event::where('status', 1)->orderBy('created_at', 'DESC')->paginate(6);
        $banner_posts = Post::where('status', 1)->where('lang', app()->getLocale())->where('to_banner', 1)->orderBy('created_at', 'DESC')->get();
        $banner_events = Event::where('status', 1)->where('to_banner', 1)->orderBy('created_at', 'DESC')->get();
        return view('web.index', compact('posts', 'events', 'banner_posts', 'banner_events'));
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
        $data = Gallery::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('web.gallery', compact('data'));
    }
}
