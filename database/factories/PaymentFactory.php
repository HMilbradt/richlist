<?php

use App\User;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Payment::class, function (Faker $faker) {

    $users = User::all()->pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users),
        'amount' => $faker->numberBetween(100, 3000)
    ];
});
