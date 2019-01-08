<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 1)->orderBy('created_at', 'DESC')->paginate(6);
        return view('web.event.index', compact('events'));
    }

    public function show($slug)
    {
        $row = Event::where('slug', $slug)->firstOrFail();
        return view('web.event.show', compact('row'));
    }

    public function apply($slug)
    {
        $row = Event::where('slug', $slug)->firstOrFail();
        return view('web.event.apply', compact('row'));
    }
}
