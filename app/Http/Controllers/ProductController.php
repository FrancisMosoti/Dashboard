<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function store(Request $request)
    {

        // dd($request->file('image'));
        // validation
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:2000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
        ]);




        $imagePath = '';
        if($request->hasFile('image')){

            $imagePath = $request->file('image')->store('uploads', 'public');
        }
        

        Product::create([
            
            'name' => $request->input('name'),
            'product_image' => $imagePath,
            'product_price' => $request->input('price'),
            'category'=> $request->input('category'),
            'user_id' => $request->User()->id
        ]);


        // Notification::route('slack', config('notification.register'))->notify(new PostsAlert());

        session()->flash('success', 'Your post has been saved.');

        return back();

    } 
}
