<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\order_product;
use Faker\Generator as Faker;

$factory->define(order_product::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(8),
        'QTY'=>$faker->word,
        'PriceEach'=>$faker->randomNumber(8),
        'order_id'=>\App\customer::all()->random(),
        'product_Code'=>\App\customer::all()->random(),

    ];
});
