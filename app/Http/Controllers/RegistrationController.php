<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }

    public function registration(Request $request)
    {

        $validated = $request->validate([
            'nickname' => ['required', 'unique:users,nickname'],
            'login' => ['required', 'unique:users,login'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:4'],
        ]);

        $data = array_merge($validated, [
            'password' => Hash::make($validated['password']),
        ]);

        User::unguard();
        $user = User::create($data);
        User::reguard();
        Auth::login($user);
        return redirect('home');
    }
}
