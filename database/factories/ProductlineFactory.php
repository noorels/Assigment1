<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productline;
use Faker\Generator as Faker;

$factory->define(Productline::class, function (Faker $faker) {
    return [
        'DescInText' => $faker->DescInText,
        'DescInHtml' => $faker->DescInHtml,
        'Image' => $faker->Image,
    ];
});
