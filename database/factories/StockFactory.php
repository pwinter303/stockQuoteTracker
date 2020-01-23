<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Stock;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {

    // Was getting an array for each UUID.. then found it was related to incremental...
    // added this to User Model:      public $incrementing = false;  which fixed the issue
    //Pluck gets the ID from Users table... then randomElement grabs a random UUID
//    $users = \App\User::all()->pluck('id')->toArray();
//    $final_uuid = $faker->randomElement($users);
//    print "dddd $final_uuid\n";

    return [
//        'id' => $final_uuid,
        'ticker' => $faker->asciify('****'),
        'name' =>$faker->name,
        'name' =>$faker->company
//        'price_when_created' => $faker->randomNumber(5)
    ];
});
