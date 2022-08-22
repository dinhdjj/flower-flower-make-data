<?php

namespace Database\Factories;

use App\Models\Anonymous;
use App\Models\Flower;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FlowerComment>
 */
class FlowerCommentFactory extends Factory
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
            'FlowerID' => Flower::factory(),
            'AnonymousID' => Anonymous::factory(),
        ];
    }
}
