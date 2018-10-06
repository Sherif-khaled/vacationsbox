<?php

$factory->define(App\VacationType::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "inactive" => 0,
    ];
});
