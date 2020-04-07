<?php

use Faker\Generator as Faker;

$factory->define(App\VenueAvailability::class, function (Faker $faker) {
	return [
		'venue_id' => factory(App\Venue::class)->create(),
		'day_id' => factory(App\Day::class)->create(),
		'time_id' => factory(App\TimeSlot::class)->create(),
		'is_unavailable' => false,
	];
});