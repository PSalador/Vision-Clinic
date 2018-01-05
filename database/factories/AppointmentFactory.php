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

$factory->define(App\Core\Models\Appointment::class, function (Faker $faker) {

    return [
        'appointment_time' => $faker->dateTimeBetween('this week', '+6 days'),
        'appointment_type' => rand(0, 1),
        'doctor_notes'     => $faker->realText(800),
    ];
});
