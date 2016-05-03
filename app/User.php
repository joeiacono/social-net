<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
	//protected $table = 'users2';
    //if you need it to look at a table of your choice
    //
    //
    //Authenticate Contract
    use \Illuminate\Auth\Authenticatable;
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

}
