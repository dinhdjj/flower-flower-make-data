<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Flower;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(10)->create();

        $flowers = Flower::factory(100)->hasComments(2)->create();
        $posts = Post::factory(100)->hasComments(2)->create();
        foreach ($flowers as $flower) {
            $flower->categories()->attach($categories->random(2));

            $order = Order::factory()->create();

            $flowerOrder = $order->Flowers()->attach($flower, [
                'UnitPrice' => $flower->UnitPrice,
                'Quantity' => random_int(1, 10),
            ]);
        }
        foreach ($posts as $post) {
            $post->categories()->attach($categories->random(2));
        }
    }
}
