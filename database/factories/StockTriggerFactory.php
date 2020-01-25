<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserStock;
use App\StockTrigger;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(StockTrigger::class, function (Faker $faker) {
//    $ids = UserStock::all()
    $ids = UserStock::all()->pluck('id')->toArray();
//    var_dump($ids);
    $id_final = $faker->randomElement($ids);

    return [
        'id' => Str::uuid()->toString(),
        'user_stock_id' => $id_final,
        'trigger_type_id' => 1,
        'trigger_status_id' => 1
    ];
});
