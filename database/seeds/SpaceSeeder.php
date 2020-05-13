<?php

use Illuminate\Database\Seeder;

class SpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert some venues
        factory(App\Space::class, 5)->create();
        factory(App\Space::class, 2)->create(['venue_id' => 1]);
    }
}
