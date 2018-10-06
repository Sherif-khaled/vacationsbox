<?php

$factory->define(App\Overtime::class, function (Faker\Generator $faker) {
    return [
        "employee_code" => $faker->randomNumber(2),
        "overtime_date" => $faker->date("d-m-Y", $max = 'now'),
        "time_start" => $faker->date("H:i:s", $max = 'now'),
        "time_end" => $faker->date("H:i:s", $max = 'now'),
        "period" => $faker->date("H:i:s", $max = 'now'),
        "overtime_reason" => $faker->name,
    ];
});
