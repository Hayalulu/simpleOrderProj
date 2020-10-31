<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(8),
        'OrderDate'=>$faker->randomNumber(8),
        'RequiredDate'=>$faker->randomNumber(8),
        'ShippedDate'=>$faker->randomNumber(8),
        'Status'=>$faker->randomNumber(8),
        'Comments'=>$faker->name,
        'customer_id'=>\App\customer::all()->random()

    ];
});
