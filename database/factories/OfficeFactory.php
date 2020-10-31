<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\office;
use Faker\Generator as Faker;

$factory->define(office::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(8),
        'City'=>$faker->name,
        'Phone'=>$faker->name,
        'Address1'=>$faker->name,
        'Address2'=>$faker->name,
        'State'=>$faker->name,
        'Country'=>$faker->name,
        'PostalCode'=>$faker->randomNumber(8),
        'Territory'=>$faker->name,


    ];
});
