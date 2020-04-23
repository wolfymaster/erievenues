<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueAvailability extends Model
{
    public $table = 'venue_availability';

	protected $casts = [
		'is_unavailable' => 'boolean',
	];

    public function venue() {
    	return $this->belongsTo('App\Venue');
	}

	public function day() {
    	return $this->belongsTo('App\Day');
	}

    public function time() {
    	return $this->belongsTo('App\TimeSlot');
	}

	# scopes

	public function scopeIsAvailable($query) {
    	return $query->whereIsUnavailable(false);
	}
}
