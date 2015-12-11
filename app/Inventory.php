<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['quantity'];

    protected $dates = [];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
