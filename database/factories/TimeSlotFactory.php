<?php

use Faker\Generator as Faker;


$factory->define(App\TimeSlot::class, function (Faker $faker) {

    $getRandom = function($array, $previous = null) {
        if($previous) {
            return $array[rand(array_search($previous, $array), count($array)-1)];
        }
        return $array[rand(0, count($array)-2)];
    };

    $minutes = ['00', 15, 30, 45];
    $hours = ['00', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23];

    $startMin = $getRandom($minutes);
    $startHour = $getRandom($hours);
    $startampm = $startHour > 12 ? 'pm' : 'am';

    $endMin = $getRandom($minutes, $startMin);
    $endHour = $getRandom($hours, $startHour);


	return [
		'start_time' => $startHour.':'.$startMin.':00',
		'end_time' => $endHour.':'.$endMin.':00',
		'ampm' => $startampm,
	];
});