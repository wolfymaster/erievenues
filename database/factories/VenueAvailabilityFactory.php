<?php

use Faker\Generator as Faker;

$factory->define(App\VenueAvailability::class, function (Faker $faker) {
	return [
		'venue_id' => function() {
			return factory(App\Venue::class)->create();
		},
		'day_id' => factory(App\Day::class),
		'time_id' => factory(App\TimeSlot::class),
		'is_unavailable' => false,
	];
});