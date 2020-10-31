<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OderDetail extends Model
{
    protected $fillable = 
    [
    	'quatities',
    ];
    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
