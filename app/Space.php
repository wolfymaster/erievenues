<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{



    //360 degree camera image
    public function threesixtyimage()
    {
        return $this->hasOne('App\ThreeSixtyImage');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function restroomTypes()
    {
        return $this->hasMany('App\RestroomType');
    }

    public function user()
    {
        return $this->belongsTo('App\Space');
    }
}
