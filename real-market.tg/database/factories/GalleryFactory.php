<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Gallery::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(),
        'property_id' => rand(1, 50)
    ];
});
