<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestroomType extends Model
{
    //
    public function spaces()
    {
        return $this->belongsToMany('App\Space', 'role_user_table', 'user_id', 'role_id');
    }
}
