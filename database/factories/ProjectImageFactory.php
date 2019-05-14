<?php

use Faker\Generator as Faker;

$factory->define(App\ProjectImage::class, function (Faker $faker) {
    return [
        'image_url' => $faker->image('public/img/project/images', 600, 450),
        'order' => $faker->numberBetween(1,4),
    ];
});
