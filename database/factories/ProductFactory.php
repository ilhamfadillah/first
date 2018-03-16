<?php

use Faker\Generator as Faker;

$factory->define(App\Supplier::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'price' => $faker->numberBetween(1000,4000);
        'stock' => numberBetween(1,100),
        'remember_token' => str_random(10)
    ];
});
