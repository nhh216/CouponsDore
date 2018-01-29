<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    protected $table = 'coupons';

    public static function getCouponLimit(){
        return self::paginate(7);
    }

    public static function searchCoupon($str)
    {
        return self::select('id','title','code')->where('title','like','%'.$str.'%')->get();
    }


    public static function getStoreNameByID($id)
    {
        return self::where('site_id',$id)->paginate(7);
    }

    public static function insertIntoCoupons($array = array() )
    {
        return DB::table('coupons')->insert($array);
    }

    public function getHomePage()
    {

    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}