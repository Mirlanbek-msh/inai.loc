<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('web.event');
    }

    public function apply()
    {
        return view('web.apply');
    }
}
