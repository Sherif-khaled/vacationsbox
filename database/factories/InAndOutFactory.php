<?php

$factory->define(App\InAndOut::class, function (Faker\Generator $faker) {
    return [
        "employee_code" => $faker->randomNumber(2),
        "in_out_type" => collect(["Late Attendance","Early departure",])->random(),
        "request_date" => $faker->date("d-m-Y", $max = 'now'),
        "day" => $faker->date("d-m-Y", $max = 'now'),
        "time" => $faker->date("H:i:s", $max = 'now'),
        "time_period" => $faker->date("H:i:s", $max = 'now'),
        "reason" => $faker->name,
    ];
});
