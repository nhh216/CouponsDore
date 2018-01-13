<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';

    public static function getData(){
        return self::select()->where()->limit()->get();
    }

    public function Coupon_Category()
    {
        return $this->belongsToMany('App\Models\Category');
    }


}