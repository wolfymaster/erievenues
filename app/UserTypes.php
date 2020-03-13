<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTypes extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
