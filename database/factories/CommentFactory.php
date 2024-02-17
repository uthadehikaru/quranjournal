<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => fake()->randomElement(Post::published()->pluck('id')),
            'user_id' => fake()->randomElement(User::where('role','member')->pluck('id')),
            'comment_id' => null,
            'message' => fake()->sentence(),
            'is_published' => fake()->boolean(70),
        ];
    }
}
