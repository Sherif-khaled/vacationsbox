<?php

$factory->define(App\EmployeeBalance::class, function (Faker\Generator $faker) {
    return [
        "employee_code_id" => factory('App\User')->create(),
        "yearly_balance" => $faker->randomNumber(2),
        "casual_balance" => $faker->randomNumber(2),
        "exhausted_annually" => $faker->randomNumber(2),
        "exhausted_casual" => $faker->randomNumber(2),
    ];
});
