<?php

namespace App\Http\Controllers\Api;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class SubCategoryController
{
//    public function __construct()
//    {
//        Gate::authorize('manage-shop');
//    }

    public function store(Request $request)
    {
        SubCategory::create($request->validate([
            'name'          => 'required|unique:sub_categories',
            'category_id'   => 'required'
        ]));

        return response()->api('Sub Category Added Successfully');
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->update($request->validate([
            'name'          => ['required', Rule::unique('sub_categories')->ignore($subCategory)],
            'category_id'   => 'filled'
        ]));

        return response()->api('Updated Successfully');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();

        return response()->api('Deleted Successfully');
    }
}
