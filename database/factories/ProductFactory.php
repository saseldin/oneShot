<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
          "name"  => $faker->word,
          "detail"  => $faker->paragraph,
          "stock"  => $faker->randomDigit,
          "price"  => $faker->numberBetween(100,1000),
          "discount"  => $faker->numberBetween(1,5),
    ];
});
