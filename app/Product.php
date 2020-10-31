<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = 
    [
    	'category_id', 'name', 'price', 'image', 'description', 'quantities', 'size', 'images'
    ];
    const LIST_SIZE= [
        '28' => 28, '29' => 29, '30' => 30, '31' => 31, '32' => 32, '33' => 33, '34' => 34, '35' => 35, '36' => 36, '37' => 37, '38' => 38, '39' => 39, '40' => 40, '41' => 41, '42' => 42, '43' => 43, '44' => 44, '45' => 45,
        'S' => 'S', 'M' => 'M', 'L' => 'L', 'XL' => 'XL', 'XXL' => 'XXL', '3XL' => '3XL'
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function productDetail()
    {
    	return $this->hasMany('App\ProductDetail');
    }
    public function productImage()
    {
    	return $this->hasMany('App\ProductImage');
    }
    public function orderDetail()
    {
    	return $this->hasMany('App\OrderDetail');
    }
}
