<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('web.post');
    }

    public function show($slug)
    {
        $row = Post::where('slug', $slug)->firstOrFail();
        return view('web.post.show', compact('row'));
    }
}
