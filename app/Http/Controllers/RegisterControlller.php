<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class RegisterControlller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }
    //
    public function view(){
        return view('register');
    }

    public function store(Request $request):RedirectResponse
    {

        // validation
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email',
            'password' => ['required','confirmed'],
            // 'terms' => ['required']
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);


        return redirect('/login')->with('success', 'Registration Successful. Now Login');
    }
}
