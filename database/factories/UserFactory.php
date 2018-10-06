<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "role_id" => factory('App\Role')->create(),
        "user_status" => collect(["Active","Inactive",])->random(),
        "remember_token" => $faker->name,
        "employee_code" => $faker->randomNumber(2),
        "gender" => collect(["Male","Female",])->random(),
        "dateofbirth" => $faker->date("d-m-Y", $max = 'now'),
        "job_title" => $faker->name,
        "department_id" => factory('App\Department')->create(),
    ];
});
