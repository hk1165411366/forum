<?php

use Faker\Generator as Faker;

$factory->define(\App\Reply::class, function (Faker $faker) {
    $user_ids = \App\User::all()->pluck('id')->toArray();
    $thread_id = \App\Thread::all()->pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_ids),
        'thread_id' => $faker->randomElement($thread_id),
        'body' => $faker->text(), // secret
    ];
});
