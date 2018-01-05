<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Core\Models\Product::class, function (Faker $faker) {

    return [
        'name' => $faker->company,
        'msrp' => random_int(0,1000),
        'descriptions' => $faker->realText(200),
        'image' => $faker->imageUrl(),
        'category' => $faker->jobTitle,
    ];
});
