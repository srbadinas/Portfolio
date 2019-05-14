<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'highlight' => $faker->text(50),
        'thumbnail' => $faker->image('public/img/project/thumbnail', 400, 300),
        'link' => "https://www.google.com",
        'description' => $faker->text(150),
        'company' => $faker->name(),
    ];
});
