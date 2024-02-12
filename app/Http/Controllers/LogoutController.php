<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
public function logout()
{
    Auth::logout();

    // Redirect to the desired location after logout
    return redirect('/login');
}
}
