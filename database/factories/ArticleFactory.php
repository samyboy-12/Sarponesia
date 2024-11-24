<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::whereIn('category_type', ['article'])->inRandomOrder()->first();

        return [
            'Title' => $this->faker->sentence(),
            'Content' => $this->faker->paragraph(),
            'Category_ID' => $category->Category_ID,
        ];
    }
}
