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
        if ($slug == 'graduates' OR $slug == 'graduates2') {
            $category = PageCategory::where('slug', $slug)->firstOrFail();
            return view('web.application.graduates', compact('category'));
        } elseif ($slug == 'organigram' OR $slug == 'internationalization') {
            $category = PageCategory::where('slug', $slug)->firstOrFail();
            return view('web.application.about', compact('category'));
        } elseif ($slug == 'organigram2') {
            $category = PageCategory::where('slug', $slug)->firstOrFail();
            return view('web.application.about2', compact('category'));
        } elseif ($slug == 'summer_school') {
            $category = PageCategory::where('slug', $slug)->firstOrFail();
            return view('web.application.summer_school', compact('category'));
        } elseif ($slug == 'q_assurance' OR $slug == 'bachelor' OR $slug == 'master' OR $slug == 'scholarship_programs' OR $slug == 'normative_documents' OR $slug == 'educational_process' OR $slug == 'portal') {
            $category = PageCategory::where('slug', $slug)->firstOrFail();
            return view('web.application.q_assurance', compact('category'));
        } else {
            $category = PageCategory::where('slug', $slug)->firstOrFail();
            return view('web.application.show', compact('category'));
        }

    }
}
