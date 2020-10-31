<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\customer;
use Faker\Generator as Faker;

$factory->define(customer::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(8),
        'Name'=>$faker->name,
        'LastName'=>$faker->name,
        'FirstName'=>$faker->name,
        'Phone'=>$faker->name,
        'Address1'=>$faker->name,
        'Address2'=>$faker->name,
        'City'=>$faker->name,
        'State'=>$faker->name,
        'PostalCode'=>$faker->randomNumber(8),
        'Country'=>$faker->name,
        'CreditLimit'=>$faker->randomNumber(8),
        'sales_Rep_Employee_Num'=>\App\employee::all()->random()



    ];
});
