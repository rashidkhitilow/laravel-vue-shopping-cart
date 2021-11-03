<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Product::class)
            ->times(20)
            ->create();
        factory(\App\Category::class)
            ->times(4)
            ->create();
        factory(\App\Order::class)
            ->times(10)
            ->create();

        $categories = \App\Category::all();
        \App\Product::all()->each(function ($product) use ($categories) {
            $product->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        });

        $orders = \App\Order::all();
        \App\Product::all()->each(function ($product) use ($orders) {
            $orderIds = $orders->random(3)->pluck('id')->toArray();
            foreach($orderIds as $orderId) {
                $product->orders()->attach($orderId, ['quantity' => rand(1, 5)]);
            }
        });
    }
}
