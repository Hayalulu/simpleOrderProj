<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(8),
        'reportsTo'=>$faker->randomNumber(8),
        'LastName'=>$faker->name,
        'FirstName'=>$faker->name,
        'Extention'=>$faker->name,
        'Email'=>$faker->name,
        'JobTitle'=>$faker->name,
        'office_code'=>\App\office::all()->random()

    ];
});
