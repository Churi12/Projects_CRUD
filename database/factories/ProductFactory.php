<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'         => $faker->name,
        'details'      => $faker->text(30),
        'project_id'   => $faker->numberBetween(1, 20),
        'category_id'  => $faker->numberBetween(1, 4),
        'created_at'   => $faker->date(),
        'updated_at'   => $faker->date()
    ];
});
