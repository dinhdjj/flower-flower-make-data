<?php

namespace Database\Factories;

use App\Models\Anonymous;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostComment>
 */
class PostCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Content' => fake()->sentence(),
            'PostID' => Post::factory(),
            'AnonymousID' => Anonymous::factory(),
        ];
    }
}
