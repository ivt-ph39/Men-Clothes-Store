<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = 
    [
    	'name', 'status', 'total', 'email', 'address', 'phone', 'message'
    ];
    public function orderDetail()
    {
    	return $this->hasMany('App\OderDetail');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
