<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        // Create 5 categories
        Category::factory()
            ->count(5)
            ->create()
            ->each(function ($category) {
                // For each category, create 10 subcategories
                SubCategory::factory()
                    ->count(10)
                    ->create([
                        'category_id' => $category->id,
                    ])
                    ->each(function ($subCategory) {
                        // For each subcategory, create 10 products
                        Product::factory()
                            ->count(1)
                            ->create([
                                'sub_category_id' => $subCategory->id,
                            ]);
                    });
            });
    }
}
