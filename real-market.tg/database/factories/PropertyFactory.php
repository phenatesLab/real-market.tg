<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Property::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'surface' => rand(60, 120),
        'rooms' => rand(1, 4),
        'bedrooms' => rand(1, 4),
        'floor' => rand(1, 20),
        'heat' => rand(1, 3),
        'city' => $faker->city,
        'address' => $faker->streetAddress,
        'postal_code' => $faker->postcode,
        'sold' => $faker->boolean,
        'for_sale' => $faker->boolean,
        'for_renting' => $faker->boolean
    ];
});
