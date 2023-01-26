<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            "title" => fake()->title(),
            "content" => fake()->text(500),
            "is_published" => rand(0, 1),
            "likes" => rand(0, 10_000),
            "slug" => str_replace(" ", "-", strtolower(fake()->title() . rand(0, 100))),
            "user_id" => rand(1, 2)
        ];
    }
}
