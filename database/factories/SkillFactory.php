<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'rate' => $faker->numberBetween(70, 90),
    ];
});

?>
