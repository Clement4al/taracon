<?php

namespace App\Http\Controllers\Api;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class BrandController
{
    public function __construct()
    {
        Gate::authorize('manage-shop');
    }

    public function store(Request $request)
    {
        Brand::create($request->validate(['name' => 'required|unique:brands', 'image' => 'image']));

        return response()->api('Added Successfully');
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->validate([
            'name' => ['required', Rule::unique('brands')->ignore($brand)],
            'image' => 'image'
        ]));

        return response()->api('Updated Successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return response()->api('Deleted Successfully');
    }
}
