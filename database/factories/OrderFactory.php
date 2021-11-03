<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'user_id' => $this->faker->numberBetween(1, 10),
        'transaction_id' => Str::random(16),
        'total' => $this->faker->numberBetween(50000, 200000),
    ];
});
