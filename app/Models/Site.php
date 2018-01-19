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

    public static function getStoreByKeySearch($str)
    {
        return self::select('id','name','logo','slug')->where('name','like','%'.$str.'%')->get();
    }
    public  function coupon()
    {
        return $this->hasMany('App\Models\Coupon');
    }
}
