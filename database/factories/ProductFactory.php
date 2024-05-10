<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'price' => fake()->randomFloat(2, 100, 2000),
            'stock' => rand(2,50),
            'description' => fake()->paragraph(),
            'category_id' => Category::all()->random()->id,
            'image' => fake()->image(public_path('placeholders'),400,300, null, false)
        ];
    }
}
