<?php

use Faker\Generator as Faker;


$factory->define(App\TimeSlot::class, function (Faker $faker) {
	return [
		'start_time' => '',
		'end_time' => ''
	];
});