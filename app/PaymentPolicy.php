<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentPolicy extends Model
{
    //
    public function venues()
    {
        return $this->belongsToMany('App\Venue');
    }
}
