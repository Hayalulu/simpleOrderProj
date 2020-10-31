<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'code'=>$faker->randomNumber(8),
        'Name'=>$faker->name,
        'Scale'=>$faker->name,
        'Vendor'=>$faker->word,
        'PdtDescripthion'=>$faker->word,
        'QtyInStock'=>$faker->randomNumber(8),
        'BuyPrice'=>$faker->randomNumber(8),
        'MSRP'=>$faker->word,
        'product_line_id'=>\App\productline::all()->random()


    ];
});
