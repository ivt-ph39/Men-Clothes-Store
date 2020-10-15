<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = 
    [
    	'category_id', 'name', 'price', 'image', 'description', 'quantities', 'size', 
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    };
    public function productDetail()
    {
    	return $this->hasMany('App\ProductDetail');
    };
    public function productImage()
    {
    	return $this->hasMany('App\ProductImage');
    };
    public function orderDetail()
    {
    	return $this->hasMany('App\OrderDetail');
    };
}
