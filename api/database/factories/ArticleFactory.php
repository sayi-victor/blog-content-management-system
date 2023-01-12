<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'author' => fake()->name(),
            'main_category' => fake()->word(),
            'sub_category' => fake()->word(),
            'title' => fake()->sentence(15),
            'main_image_link' => fake()->word(),
            'body' => fake()->paragraphs(10,true),
            'updated_at' => fake()->unixTime(),
            'created_at' => fake()->unixTime(),
        ];
    }
}
