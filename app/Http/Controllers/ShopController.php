<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // You can filter products here based on category, search, etc.
        $products = Product::query()
            ->when($request->has('sub-category'), function ($query) use ($request) {
                $query->whereHas('subCategory', function ($q) use ($request) {
                    $q->where('slug', $request->get('sub-category'));
                });
            })
            ->paginate(9) // You can change number per page
            ->withQueryString(); // Keeps query params in the pagination links

        $categories = Category::with('subCategories')->get();
        $currentSubCategorySlug = $request->get('sub-category');

        return view('shop.index', compact('products', 'categories', 'currentSubCategorySlug'));
    }
    public function show(Product $product): View
    {
//        $product->load(['subCategory.products' => fn ($query) => $query->has('image')->take(10)]);

        $products = Product::all();
//        $recommendedProducts = Product::whereHas('image')->inRandomOrder()->take(10)->get();

        return view('shop.show', compact('products', ));
    }
}
