<?php

use Faker\Generator as Faker;

$factory->define(App\model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->text(100),
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,40)
    ];
});
