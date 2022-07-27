<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginers(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('dashboard');
        }

         return redirect('/');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
