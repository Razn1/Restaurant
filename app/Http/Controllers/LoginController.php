<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {;
            return redirect('/dashboard')->with('message', 'Berhasil Login');
        } else {
            return redirect('/login')->with('error', 'username dan password salah');
        };
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/l');
    }
}
