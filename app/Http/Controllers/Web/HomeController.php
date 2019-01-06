<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $rows = Post::where('status', 1)->orderBy('created_at', 'DESC')->paginate(15);
        return view('web.index', compact('rows'));
    }

    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function gallery()
    {
        return view('web.gallery');
    }
}
