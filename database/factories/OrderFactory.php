<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_id'=>\App\Order::all()->random(),
        'OrderDate' => $faker->OrderDate,
        'RequiredDate' => $faker->RequiredDate,
        'ShippedDate' => $faker->ShippedDate,
        'Status' => $faker->Status,
        'Comments' => $faker->Comments,
    ];
});
