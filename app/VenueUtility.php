<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueUtility extends Model
{
    //
    public function venues()
    {
        return $this->belongsToMany('App\Venue');
    }
}
