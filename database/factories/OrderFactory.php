<?php

namespace Database\Factories;

use App\Models\Anonymous;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Note' => fake()->optional()->sentence(),
            'ShippingCost' => 1000 * random_int(0, 50),
            'AnonymousID' => Anonymous::factory(),
            'PaidAt' => fake()->optional()->dateTimeBetween('-2 month', 'now'),
        ];
    }
}
