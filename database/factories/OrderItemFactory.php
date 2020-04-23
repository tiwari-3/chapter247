<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\OrderItem;
use App\Order;
use App\Product;
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

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'order_id' => App\Order::all(['id'])->random(),
        'product_id' => App\Product::all(['id'])->random(),
        'quantity' => $faker->randomDigit,
    ];
});
