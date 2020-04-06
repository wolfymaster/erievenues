<?php

use Faker\Generator as Faker;

$factory->define(App\VenueAvailability::class, function (Faker $faker) {
	return [
		'venue_id' => "",
		'day_id' => "",
		'time_id' => "",
		'is_unavailable' => "",
	];
});