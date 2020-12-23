<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'City' => $faker->City,
        'Phone' => $faker->Phone,
        'Address1' => $faker->Address1,
        'Address2' => $faker->Address2,
        'State' => $faker->State,
        'Country' => $faker->Country,
        'PostalCode' => $faker->PostalCode,
        'Territory' => $faker->Territory,

    ];
});
