<?php

use Faker\Generator as Faker;

$factory->define(App\Day::class, function (Faker $faker) {
    $currentTime = strtotime("now");

    return [
        'day' => date('d', $currentTime),
        'month' => date('m', $currentTime),
        'year' => date('Y', $currentTime),
        'day_of_week' => date('l', $currentTime)
    ];
});