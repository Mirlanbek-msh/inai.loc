<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->where('lang', app()->getLocale())->orderBy('created_at', 'DESC')->paginate(2);
        return view('web.post.index', compact('posts'));
    }

    public function show($slug)
    {
        $row = Post::where('slug', $slug)->firstOrFail();
        $row->increment('views');
        return view('web.post.show', compact('row'));
    }
}
