<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\payment;
use Faker\Generator as Faker;

$factory->define(payment::class, function (Faker $faker) {
    return [
        'CheckNum'=>$faker->word,
        'PaymentDate'=>$faker->randomNumber(8),
        'Amount'=>$faker->randomNumber(8),
        'customer_id'=>\App\customer::all()->random()

    ];
});
