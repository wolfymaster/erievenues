<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueAsset extends Model
{
    //
    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }
}
