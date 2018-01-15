<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = 'sites';

    public static function getInfoStoreByID($id)
    {
        return self::where('id',$id)->get();
    }

    public  function coupon()
    {
        return $this->hasMany('App\Models\Coupon');
    }
}
