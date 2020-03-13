<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }
}
