<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
     public function create()
    {
        return view('auth.login');
    }

    public function store()
    {

        //validade
        $attributes = request()->validate([
            'email'=> ['required'],
            'password' => ['required']
        ]);

        // attempt to login the user
        Auth::attempt($attributes);

        //regenerate the session button
        request()->session()->regenerate();

        //redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
