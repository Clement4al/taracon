<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $discountedProducts = Product::discounted()->whereHas('image')->get();
//        $bestSellers = Product::whereHas('image')->withCount('orders')->latest('orders_count')->take(20)->get();
        $bestSellers = Product::whereHas('image')->take(10)->get();
        $latestProducts = Product::latest()->whereHas('image')->take(12)->get();

        return view('home' , compact('discountedProducts','bestSellers', 'latestProducts'));
    }
}
