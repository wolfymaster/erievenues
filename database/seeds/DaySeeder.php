<?php

use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// insert 10 years worth of days
		$currentTime = strtotime("now");
		$endTime = strtotime("now + 10 years");

		while($currentTime <= $endTime) {
			App\Day::create([
				'day' => date('d', $currentTime),
				'month' => date('m', $currentTime),
				'year' => date('Y', $currentTime),
				'day_of_week' => date('l', $currentTime)
			]);
			$currentTime = strtotime("+ 1 day", $currentTime);
		}
    }
}
