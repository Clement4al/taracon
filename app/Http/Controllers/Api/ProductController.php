<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Auth\Middleware\Authorize;

class ProductController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(
//            Authorize::using('manage-shop')
//        );
//    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        return response()->api('Product added successfully', headers: [
            'x-location' => route('products.edit', $product)
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return response()->api('Updated Successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->api('Product Deleted', headers: [
            'x-location' => route('products.index')
        ]);
    }
}
