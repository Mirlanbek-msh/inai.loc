<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageCategory;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('web.application.index');
    }

    public function show($slug)
    {
        $category = PageCategory::where('slug', $slug)->firstOrFail();
        return view('web.application.show', compact('category'));
    }
}
