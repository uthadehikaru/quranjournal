<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $title = fake()->word(2);
        return [
            'title' => $title,
            'slug' => str($title)->slug(),
            'content' => fake()->sentence(),
            'is_published' => fake()->boolean(70),
            'published_at' => fake()->dateTimeThisYear(),
            'thumbnail' => 'thumbnails/'.fake()->image(storage_path('app/public/thumbnails'), 400, 400, null, false),
            'category_id' => 1,
        ];
    }
}
