<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $fillable = 
    [

    ];
    public function permission()
    {
    	return $this->belongsTo('App\Permission');
    }
    public function role()
    {
    	return $this->belongsTo('App\Role');
    }
}
