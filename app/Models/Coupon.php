<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';

    public static function getData(){
        return self::select()->where()->limit()->get();
    }

    public static function searchCoupon($str)
    {
        return self::select('id','title','thumb')->where('title','like','%'.$str.'%')->get();
    }

    public static function getStoreNameByID($id)
    {
        return self::where('site_id',$id)->get();
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function site()
    {
        return $this->belongsTo('App\Models\Site');
    }
}