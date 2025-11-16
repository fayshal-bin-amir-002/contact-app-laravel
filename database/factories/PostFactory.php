<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $title = fake()->sentence(),
            "slug" => Str::slug($title),
            "body" => fake()->text(1000),
            "status" => rand(0, 1) === 1 ? "published" : "draft",
            "date" => now()
        ];
    }
}
