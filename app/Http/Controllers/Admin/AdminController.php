<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        dd(auth()->user()->getRoleNames());
        return view('admin.index');
    }
}
