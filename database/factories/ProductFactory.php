<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Product;

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
        $category = Category::whereIn('category_type', ['kopi', 'peralatan'])->inRandomOrder()->first();

        return [
            'Name' => $this->faker->word(),
            'Description' => $this->faker->sentence(),
            'Price' => $this->faker->randomFloat(2, 10000, 500000),
            'Stock' => $this->faker->numberBetween(1, 100),
            'Category_ID' => $category->Category_ID,
        ];
    }
}

