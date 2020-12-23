<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [

       'customer_id'=>\App\Payment::all()->random(),
        'ChechNum' => $faker->ChechNum,
        'paymentDate' => $faker->paymentDate,
        'Amount' => $faker->Amount,

    ];
});
