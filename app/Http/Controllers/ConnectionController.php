<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectionController extends Controller
{
    public function connection()
    {
        return view('connection');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            return redirect()->route('profile'); 
        } 
        else
        {
            return redirect()->route('login')->with('error', 'Incorrect email or password');
        }
    }

}
