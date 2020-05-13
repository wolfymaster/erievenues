<?php

use Faker\Generator as Faker;

$factory->define(App\Venue::class, function (Faker $faker) {
	return [
        'name' => $faker->company,
        'description' => $faker->text(),
        'opening_time' => $faker->time(),
        'closing_time' => $faker->time(),
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip_code' => $faker->postcode,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'price_level' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
        'considerations' => $faker->text($maxNbChars = 200),

        'express_booking' => $faker->boolean,
        'deposit_required' => $faker->boolean,
        'accepts_credit_card' => $faker->boolean,
        'accepts_check' => $faker->boolean,

        'private_bar' => $faker->boolean,
        'public_bar' => $faker->boolean,
        'allows_byob' => $faker->boolean,
        'catering_allowed' => $faker->boolean,
        'venue_caters' => $faker->boolean,
        'food_for_purchase' => $faker->boolean,


        'locally_owned' => $faker->boolean,
        'woman_owned' => $faker->boolean,
        'veteran_owned' => $faker->boolean,
        'franchise_owned' => $faker->boolean,
        'small_business' => $faker->boolean,

        'free_lot' => $faker->boolean,
        'paid_lot' => $faker->boolean,
        'free_parking_garage' => $faker->boolean,
        'paid_parking_garage' => $faker->boolean,
        'free_street_parking' => $faker->boolean,
        'paid_street_parking' => $faker->boolean,
        'valet_parking' => $faker->boolean,

        'children_not_allowed' => $faker->boolean,
        'under_18_not_allowed' => $faker->boolean,
        'under_21_not_allowed' => $faker->boolean,
        'dog_friendly' => $faker->boolean,
        'smoking' => $faker->boolean,
        'outside_smoking' => $faker->boolean,
        'handicap_accessible' => $faker->boolean,
        'has_elevator' => $faker->boolean,
        'has_stairs' => $faker->boolean,
        'has_wifi' => $faker->boolean,

        'private_restroom' => $faker->boolean,
        'public_restroom' => $faker->boolean,
        'gender_neutral_restrooms' => $faker->boolean,
        'handicap_accessible_restrooms' => $faker->boolean,
        'portable_restrooms' => $faker->boolean,

	];
});