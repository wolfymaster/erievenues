<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

	public function scopeWithinRange($query, $startTimestamp, $endTimestamp) {
    	// where day and time is within provided range
    	return $query->whereHas('day', function (Builder $query) use($startTimestamp, $endTimestamp) {
			$query->where('day', '>=', date('d', strtotime($startTimestamp)) )
				-> where('day', '<=', date('d', strtotime($endTimestamp)) );
		})->whereHas('time', function (Builder $query) use($startTimestamp, $endTimestamp) {
			$query->where('start_time', '>=', date('h:i', strtotime($startTimestamp)) )
				-> where('end_time', '<=', date('h:i', strtotime($endTimestamp)) );
		});
	}
}
