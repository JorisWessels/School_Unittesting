<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
//        'description'=>$faker->paragraph(5),
//        'price'=>$faker->randomFloat(2,1,99),
    ];
});
