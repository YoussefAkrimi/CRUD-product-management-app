<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
   

    public function create()
    {
        return  view('auth.login');
    }


    public function store(Request $request)
    {
        // firt validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // then attempt to login
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry those credentials do not match our databse!'
            ]);
        }
        // if suceeded then regenerate the session token
        request()->session()->regenerate();
        // redirect tothe home page :
        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
