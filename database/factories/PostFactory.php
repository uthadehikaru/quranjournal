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
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => str($title)->slug(),
            'content' => '<p>'.collect(fake()->paragraphs(5))->join('<p></p>', '</p>'),
            'is_published' => fake()->boolean(70),
            'published_at' => fake()->dateTimeThisYear(),
            'thumbnail' => null,
            'category_id' => 1,
        ];
    }
}
