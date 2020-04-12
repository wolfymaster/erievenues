<?php

use Faker\Generator as Faker;


$factory->define(App\TimeSlot::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween('2020-04-06 6:00', '2020-04-06 23:00');

	return [
		'start_time' => $date->format('H:i:s'),
		'end_time' => $date->add(new DateInterval('PT1H'))->format('H:i:s'),
		'ampm' => $date->format('a'),
	];
});