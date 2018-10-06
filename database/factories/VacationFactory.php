<?php

$factory->define(App\Vacation::class, function (Faker\Generator $faker) {
    return [
        "employee_code" => $faker->randomNumber(2),
        "request_date" => $faker->date("d-m-Y", $max = 'now'),
        "start_date" => $faker->date("d-m-Y", $max = 'now'),
        "end_date" => $faker->date("d-m-Y", $max = 'now'),
        "count_days" => $faker->randomNumber(2),
        "vacation_type_id" => factory('App\VacationType')->create(),
        "reason" => $faker->name,
        "employee_alternative_id" => factory('App\User')->create(),
        "accepted_by_manager" => 0,
        "accepted_by_hr" => 0,
    ];
});
