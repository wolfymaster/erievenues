<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Booking extends Model
	{
		public function venue() {
			return $this->belongsTo('App\Venue');
		}

		public function day() {
			return $this->belongsTo('App\Day');
		}

		public function start_slot() {
			return $this->belongsTo('App\TimeSlot');
		}

		public function end_slot() {
			return $this->belongsTo('App\TimeSlot');
		}

	}