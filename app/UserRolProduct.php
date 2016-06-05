<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRolProduct extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\user');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function rol()
    {
        return $this->belongsTo('App\Role');
    }
}
