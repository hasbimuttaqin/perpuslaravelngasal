<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function registration(Request $request)
    {
       User::create([

        'name' => $request->name,

        'email' => $request->email,

        'password' => Hash::make($request->password),

        'remember_token' => Str::random(60),

       ]);

       return redirect('/');
    }
}
