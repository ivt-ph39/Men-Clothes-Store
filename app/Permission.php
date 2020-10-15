<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = 
    [

    ];
    public function permissionRole()
    {
    	return $this->hasMany('App\PermissionRole');
    };
}
