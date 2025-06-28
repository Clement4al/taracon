<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CheckoutController extends Controller
{

public function index(): View
    {
        $categories = Category::all();

        return view('checkout', compact('categories'));
    }
}
