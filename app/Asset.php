<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function members()
    {
        return $this->belongsToMany('App\Member');
    }
}
