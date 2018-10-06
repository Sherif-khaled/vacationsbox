<?php

$factory->define(App\Errand::class, function (Faker\Generator $faker) {
    return [
        "employee_code" => $faker->randomNumber(2),
        "request_date" => $faker->date("d-m-Y", $max = 'now'),
        "start_date" => $faker->date("d-m-Y", $max = 'now'),
        "end_date" => $faker->date("d-m-Y", $max = 'now'),
        "errand_period" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "employee_alternative_id" => factory('App\User')->create(),
        "errand_reason" => $faker->name,
    ];
});
