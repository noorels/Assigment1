<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'Productline_id'=>\App\Product::all()->random()
        'name' => $faker->name,
        'scale' => $faker->scale,
        'vendor' => $faker->vendor,
        'Pdtdescription' => $faker->Pdtdescription,
        'QtyInStock' => $faker->QtyInStock,
        'BuyPrice' => $faker->BuyPrice,
        'MSRP' => $faker->MSRP,


    ];
});
