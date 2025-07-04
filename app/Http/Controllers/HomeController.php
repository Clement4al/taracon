<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function home(){
        $products = Product::all()->take(12);
        return view('home.index' , compact('products'));
    }
}
