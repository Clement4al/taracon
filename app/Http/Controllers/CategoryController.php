<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\View\View;

class CategoryController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(
//            Authorize::using('manage-shop')
//        );
//    }

    public function index(): View
    {
        $categories = Category::with('subCategories')->withCount('products')->get();

        return view('categories.index', compact('categories'));
    }

    public function create(): View
    {
        $subCategories  = SubCategory::all();

        return view('categories.create', compact('subCategories'));
    }

    public function edit(Category $category): View
    {
        $subCategories  = SubCategory::all();

        return view('categories.edit', compact('subCategories', 'category'));
    }
}
