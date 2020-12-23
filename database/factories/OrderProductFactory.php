<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order_Product;
use Faker\Generator as Faker;

$factory->define(Order_Product::class, function (Faker $faker) {
    return [
        'order_id'=>\App\Order::all()->random(),
        'product_id'=>\App\Order::all()->random(),
        'Qty' => $faker->Qty,
        'PriceEach' => $faker->PriceEach,

    ];
});
