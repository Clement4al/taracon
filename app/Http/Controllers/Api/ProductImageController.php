<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(Authorize::using('manage-shop'));
//    }

//    public function store(Request $request, Product $product)
//    {
//        $product->images()->create(['src' => $request->file]);
//
//        return response()->api('Uploaded successfully');
//    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'file'       => 'required|file|image|mimes:jpeg,png,jpg,webp|max:3072',
            'product_id' => 'nullable|exists:products,id',
        ]);
        Image::create([
            'src'        => $validated['file'],
            'product_id' => $validated['product_id'] ?? null,
        ]);
    }
    public function destroy(Image $image)
    {
        $image->delete();

        return response()->api('Deleted successfully');
    }
}
