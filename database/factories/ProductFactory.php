<?php

/** @var Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(20),
        'stock' => $faker->numberBetween(100, 150),
        'price' => $faker->numberBetween(100, 5000),
        'height' => $faker->numberBetween(10, 20),
        'width' => $faker->numberBetween(10, 20),
        'weight' => $faker->numberBetween(10, 20),
        'thickness' => $faker->numberBetween(10, 20),
        'slug' => Str::random('10'),
    ];
});
