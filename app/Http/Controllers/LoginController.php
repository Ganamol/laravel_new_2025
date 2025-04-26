<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController
{
    public function login()
    {
        return view('login');

    } 
    public function dologin(Request $request)
    {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    } 
    else {
        return redirect()->route('login')->with('message', 'Login is Invalid');
    }
   }

   public function logout()
   {
       Auth::logout();
       return redirect()->route('login');
   }
}

