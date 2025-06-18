<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->word;

        return [
            'name' => ucfirst($name),
            'image' => $this->faker->imageUrl(200, 200, 'category', true),
            'slug' => Str::slug($name),
            'relevance' => $this->faker->numberBetween(1, 10),
            'featured_at' => $this->faker->optional()->dateTimeBetween('-1 month'),
//            'created_by' => 1,
//            'updated_by' => 1,
        ];
    }
}
