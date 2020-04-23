<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Order;
use Illuminate\Support\Str;
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

$factory->define(Order::class, function (Faker $faker) {
    return [
        'invoice_number' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'total_amount' => $faker->randomFloat(2, 1, 100 ),
        'status' => $faker->randomElement(['new','processed'])
    ];
});
