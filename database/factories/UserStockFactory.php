<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserStock;
use App\User;
use App\Stock;
use Faker\Generator as Faker;

$factory->define(UserStock::class, function (Faker $faker) {

    $users = User::all()->pluck('id')->toArray();
    $stocks = Stock::all()->pluck('id')->toArray();
    $user_id = $faker->randomElement($users);
    $stock_id = $faker->randomElement($stocks);

    return [
        'id' => Str::uuid()->toString(),
        'user_id' => $user_id,
        'stock_id' => $stock_id
    ];
});
