<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\User;
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
        return [
           'title' => fake()->sentence(),
           'slug' => fake()->slug(),
           'body' => fake()->paragraph(),
           'image' => fake()->image(),
           'status' => 0,
           'author_id' => User::factory()

        ];
    }
}
