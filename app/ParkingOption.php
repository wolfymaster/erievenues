<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingOption extends Model
{
    //
    public function venues()
    {
        return $this->hasMany('App\Venue');
    }
}
