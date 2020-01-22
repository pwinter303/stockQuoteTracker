<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Userstock;
use App\User;
use App\Stock;
use Faker\Generator as Faker;

$factory->define(Userstock::class, function (Faker $faker) {

    $users = User::all()->pluck('id')->toArray();
    $stocks = Stock::all()->pluck('id')->toArray();
    $user_id = $faker->randomElement($users);
    $stock_id = $faker->randomElement($stocks);

    return [
        'users_id' => $user_id,
        'stocks_id' => $stock_id
    ];
});
