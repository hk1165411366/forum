<?php

use Faker\Generator as Faker;

$factory->define(\App\Thread::class, function (Faker $faker) {
    $user_ids = \App\User::all()->pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_ids),
        'title' => $faker->sentence,
        'body' => $faker->text(), // secret
    ];
});
