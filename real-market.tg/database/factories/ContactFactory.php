<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'telephone' => $faker->phoneNumber,
        'subject' => $faker->sentence,
        'message' => $faker->paragraphs
    ];
});
