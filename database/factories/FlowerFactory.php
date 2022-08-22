<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flower>
 */
class FlowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name' => fake()->name(),
            'Body' => fake()->paragraph(),
            'UnitPrice' => 1000 * random_int(1, 100),
            'Quantity' => random_int(1, 100),
            'MainImageURL' => fake()->imageUrl(category:'flower'),
            'UserID' => User::factory(),
        ];
    }
}
