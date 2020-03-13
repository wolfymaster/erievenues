<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreeSixtyImage extends Model
{
    //
    public function space()
    {
        return $this->belongsTo('App\Space');
    }

}
