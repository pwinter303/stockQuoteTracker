<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Users;
use Faker\Generator as Faker;

// PLW
use Illuminate\Support\Str;

$factory->define(Users::class, function (Faker $faker) {
    return [
        'id' => Str::uuid()->toString(),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
