<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EntranceController extends Controller
{
    public function entrance()
    {
        return view('pages.entrance');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'лох',
        ])->onlyInput('email');
    }
}
