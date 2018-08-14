<?php

use App\model\Product;
use Faker\Generator as Faker;

$factory->define(App\model\Review::class, function (Faker $faker) {
    return [
        'customer' => $faker->name,
        'review' => $faker->text(200),
        'star' => $faker->numberBetween(0,5),
        'product_id' => function(){
        	return Product::all()->random();
        }
    ];
});
