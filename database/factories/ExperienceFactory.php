<?php

use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'job' => $faker->name(),
        'image_url' => $faker->image('public/img/company',400,300),
        'company_name' => $faker->name(),
        'company_url' => "https://www.google.com",
        'address' => $faker->address(),
        'description' => $faker->text(150),
        'date_from' => $faker->date(),
        'date_to' => $faker->date(),
    ];
});
