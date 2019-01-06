<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $result = auth()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        if($result)
        {
            return redirect()->route('admin.home');
        }
        return redirect()->back()->with('status', 'Username or password incorrect');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
