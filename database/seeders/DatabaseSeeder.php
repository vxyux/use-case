<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            'AI',
            'Phone',
            'Laptop',
            'PC',
            'Tablet',
            'Accessories'
        ];

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Jacky Liu',
            'email' => 'jacky@usecase.com',
            'role' => 1
        ]);

        foreach($categories as $category) {
            Category::factory()->create([
                'title' => $category
            ]);
        }

        Product::factory(10)->has(Review::factory([
            'product_id' => $category
        ])->count(2))->create();
    }
}
