<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    $productPrefixes = ['Sweater', 'Pants', 'Shirt', 'Hat', 'Glasses', 'Socks'];
    $name = $this->faker->company . ' ' . \Illuminate\Support\Arr::random($productPrefixes);
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $this->faker->realText(320),
        'price' => $this->faker->numberBetween(10000, 100000),
    ];
});
