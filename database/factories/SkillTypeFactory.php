<?php

use Faker\Generator as Faker;

$factory->define(App\SkillType::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'image_url' => $faker->image('public/img/skill_type',400,300),
    ];
});

?>
