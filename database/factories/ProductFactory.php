<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition(): array
    {
        $productNames = [
            'Banana', 'Organic Apple', 'Bread', 'Almond Milk',
            'Orange Juice', 'Brown Rice', 'Greek Yogurt', 'Peanut Butter',
            'rice', 'beans', 'milk', 'mushrooms', 'milo',
            'Avocado', 'Spinach', 'Carrots', 'Tomatoes', 'Cucumber', 'Lettuce'
        ];

        $name = $this->faker->unique()->randomElement($productNames);

        return [
            'sub_category_id' => SubCategory::factory(),
            'name' => ucfirst($name),
            'description' => $this->faker->sentences(2, true),
            'tags' => implode(',', $this->faker->words(3)),
            'cost_price' => $this->faker->randomFloat(2, 100, 1000),
            'price' => $this->faker->randomFloat(2, 1000, 2000),
            'currency' => $this->faker->randomElement(['ngn', 'usd']),
            'discount' => $this->faker->numberBetween(0, 30),
            'model_no' => 'M-' . strtoupper(Str::random(6)),
            'serial_no' => 'S-' . strtoupper(Str::random(10)),
            'image' => $this->faker->imageUrl(),
            'featured_at' => $this->faker->optional()->dateTimeBetween('-2 months'),
            'slug' => Str::slug($name . '-' . Str::random(5)),
            'subscribers' => json_encode(['user_1', 'user_2']),
//            'created_by' => 1,
//            'updated_by' => 1,
        ];
    }
}
