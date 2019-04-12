<?php

use Faker\Generator as Faker;

$factory->define(App\Education::class, function (Faker $faker) {
    return [
        'school' => $faker->name(),
        'address' => $faker->address(),
        'course' => $faker->name(),
        'date_from' => $faker->date(),
        'date_to' => $faker->date(),
    ];
});
