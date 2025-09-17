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

    public function store(Request $request, Product $product)
    {
        $product->images()->create(['src' => $request->file]);

        return response()->api('Uploaded successfully');
    }

//    public function store(Request $request, Product $product)
//    {
//        $request->validate([
//            'file' => 'required|image|max:2048',
//        ]);
//
//        $image = $product->images()->create([
//            'src' => $request->file('file'), // ✅ use file('file')
//        ]);
//
//        return response()->api([
//            'message' => 'Uploaded successfully',
//            'url' => $image->medium, // ✅ send back usable URL for preview
//        ]);
//    }

    public function destroy(Image $image)
    {
        $image->delete();

        return response()->api('Deleted successfully');
    }
}
