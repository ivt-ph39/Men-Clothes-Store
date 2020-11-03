<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = 
    [
    	'name', 'status', 'total', 'email', 'address', 'phone', 'message'
    ];
    const ORDER_STATUS = [
        0 => 'Đang đóng gói',
        1 => 'Đã đóng gói',
        2 => 'Đang giao',
        3 => 'Đã giao',
        4 => 'Đã hủy',
        5 => 'Khách không nhận'
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
