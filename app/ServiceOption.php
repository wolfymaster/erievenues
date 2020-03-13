<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOption extends Model
{
    //
    public function venues()
    {
        return $this->belongsToMany('App\Venue', 'service_option_table', 'venue_id', 'service_option_id');
    }
}
