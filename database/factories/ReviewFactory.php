<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'body' => $faker->text(500),
        'rating' => $faker->numberBetween(1, 10),
        'user_id' => \App\User::all()->random()->id
    ];
});
