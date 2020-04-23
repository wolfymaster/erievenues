<?php

use Faker\Generator as Faker;

$factory->define(App\Venue::class, function (Faker $faker) {
	return [
		'name' => $faker->company,
        'opening_time' => $faker->time(),
        'closing_time' => $faker->time(),
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip_code' => $faker->postcode,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
	];
});