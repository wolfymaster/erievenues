<?php

use Faker\Generator as Faker;

$factory->define(App\Day::class, function (Faker $faker) {
    $days = rand(0, 7);
    $currentTime = strtotime("now + ".$days." days");

    return [
        'day' => date('d', $currentTime),
        'month' => date('m', $currentTime),
        'year' => date('Y', $currentTime),
        'day_of_week' => date('l', $currentTime)
    ];
});