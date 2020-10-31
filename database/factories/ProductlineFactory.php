<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\productline;
use Faker\Generator as Faker;

$factory->define(productline::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(10),
        'DescInText'=>$faker->name,
        'DescInHtml'=>$faker->name,
        'Image'=>$faker->name,
    ];
});
