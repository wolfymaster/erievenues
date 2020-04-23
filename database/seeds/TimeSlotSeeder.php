<?php

	use Illuminate\Database\Seeder;

	class TimeSlotSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			// insert 10 years worth of days
			$currentTime = mktime("0","0","0");
			$endTime = mktime("23","59","59");

			$blocksize = "15 minutes";

			while($currentTime <= $endTime) {
				App\TimeSlot::create([
					'start_time' => date('H:i:s', $currentTime),
					'end_time' => date('H:i:s', $currentTime),
					'ampm' => date('a', $currentTime)
				]);
				$currentTime = strtotime("+ ".$blocksize, $currentTime);
			}
		}
	}
