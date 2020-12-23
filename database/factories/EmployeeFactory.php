<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'Office_id'=>\App\Employee::all()->random(),
        'reportsTo' => $faker->reportsTo,
        'LastName' => $faker->LastName,
        'FirstName' => $faker->FirstName,
        'Extension' => $faker->Extension,
        'Email' => $faker->Email,
        'JobTitle' => $faker->JobTitle,
         
    ];
});
