<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
   $name = $this->faker->jobTitle;
   $nameArr = explode(' ', $name);
   $name = $nameArr[0];
    return [
        'name' => $name,
        'slug' => Str::slug($name)
    ];
});
