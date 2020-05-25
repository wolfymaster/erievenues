<?php

use Faker\Generator as Faker;

$factory->define(App\Space::class, function (Faker $faker) {
	return [
        'name' => $faker->company,
        'base_fee' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        'hourly_rate' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        'maximum_occupancy' => $faker->numberBetween($min = 10, $max = 150),
        'standing_quantity' => $faker->numberBetween($min = 10, $max = 150),
        'seating_quantity' => $faker->numberBetween($min = 10, $max = 150),
        'booth_seating' => $faker->boolean,
        'high_top_seating' => $faker->boolean,
        'regular_seating' => $faker->boolean,
        'venue_id' => function() {
                return factory(App\Venue::class)->create();
        }
	];
});