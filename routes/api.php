<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// routes/api.php



Route::get('/products', function () {
    // Retrieve user data with photo relationship
    $products = Product::all();


    // Return JSON response
    return response()->json(
        ['products' => $products], 200
    );
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
