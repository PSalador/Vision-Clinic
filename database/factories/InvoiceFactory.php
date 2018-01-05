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

$factory->define(App\Core\Models\Invoice::class, function (Faker $faker) {
    return [
        'invoice_date' => $faker->dateTimeBetween('this week', '+6 days'),
        'invoice_due'=> $faker->dateTimeBetween('this week', '+6 days'),
        'invoice_status' => random_int(0,1),
        'ship_date' => $faker->dateTimeBetween('this week', '+6 days'),
    ];
});
