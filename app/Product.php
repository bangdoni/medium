<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['name', 'purchase_price', 'sell_price'];

    protected $dates = [];

    public function inventories()
    {
    	return $this->hasMany('App\Inventory');
    }
}
