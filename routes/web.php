<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterControlller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/btn', function () {
    return view('buttons');
})->name('btn');

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::controller(RegisterControlller::class)->group(function () {
    // Your routes here
    Route::get('/register', 'view');
    Route::post('/register', 'store')->name('register');
});

Route::controller(LoginController::class)->group(function () {
    // Your routes here
    Route::get('/login', 'view')->name('login');
    Route::post('/login', 'login')->name('login');
});

// logout route
Route::post('/logout',[LogoutController::class, 'logout'])->name('logout');
Route::get('/logout',[LogoutController::class, 'logout']);

// product route
Route::post('/product',[ProductController::class, 'store'])->name('add-product');