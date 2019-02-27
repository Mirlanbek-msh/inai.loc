<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $row = Page::where('slug', $slug)->firstOrFail();
        return view('web.page.show', compact('row'));
    }
}
