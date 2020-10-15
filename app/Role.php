<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = 
    [

    ];
    public function permissionRole()
    {
    	return $this->hasMany('App\PermissionRole');
    };
}
