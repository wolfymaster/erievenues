<?php

use Illuminate\Database\Seeder;

class VenueAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Venue::all()->each( function($venue) {
            factory(App\VenueAvailability::class, 10)->create([
                'venue_id' => $venue->id
            ]);
        });
    }
}
