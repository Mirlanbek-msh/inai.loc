<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('web.application.index');
    }

    public function bachelor()
    {
        return view('web.application.bachelor');
    }

    public function master()
    {
        return view('web.application.master');
    }

    public function requirements()
    {
        return view('web.application.requirements');
    }

    public function partnership()
    {
        return view('web.application.partnership');
    }
}
