<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = 'sites';

    public  function coupon()
    {
        return $this->hasMany('App\Models\Coupon');
    }
}
