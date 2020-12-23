<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'employee_id'=>\App\Customer::all()->random()
        'LastName' => $faker->LastName,
        'FirstName' => $faker->FirstName,
        'Phone' => $faker->Phone,
        'Adress1' => $faker->Extension,
        'Adress2' => $faker->Adress2,
        'City' => $faker->City,
        'State' => $faker->State,
        'PostalCode' => $faker->PostalCode,
        'Country' => $faker->Country,
        'Creditlimit' => $faker->Creditlimit,
    ];
});
