<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategoryIds = SubCategory::pluck('id')->toArray();

        // Seed 10 sample products
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'sub_category_id' => $subCategoryIds[array_rand($subCategoryIds)],
                'name' => 'Product ' . $i,
                'description' => 'Description for product ' . $i,
                'tags' => 'tag1,tag2',
                'cost_price' => rand(1000, 3000),
                'price' => rand(3000, 5000),
                'discount' => rand(0, 30),
                'model_no' => 'M-' . Str::random(5),
                'serial_no' => 'S-' . Str::random(8),
                'featured_at' => now()->subDays(rand(0, 30)),
                'slug' => Str::slug('Product ' . $i . '-' . Str::random(5)),
                'subscribers' => json_encode(['user_1', 'user_2']),
                'created_by' => 1,  // Assuming the `authors()` macro adds created_by etc.
                'updated_by' => 1,
            ]);
        }
    }
}
