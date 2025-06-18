<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Snacks'],
            ['name' => 'Drinks'],
            ['name' => 'Vegetables'],
            ['name' => 'Foodstuff'],
            ['name' => 'Provisions'],
        ];

        foreach ($categories as $cat) {
            SubCategory::create([
                'category_id' => 1, // Make sure at least one category exists with ID 1
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'created_by' => 1,
                'updated_by' => 1,
            ]);
        }
    }
}
