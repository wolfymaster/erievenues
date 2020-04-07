<?php

use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert some venues
        factory(App\Venue::class, 5)->create()->each(function ($venue) {
            factory(App\VenueAvailability::class)->create([
                "venue_id" => $venue
            ]);
        });
    }
}
