<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;


class Coupon extends Model
{
    protected $table = 'coupons';


    public static function getCouponLimit(){
        return self::paginate(15);
    }

    public static function searchCoupon($str)
    {
        return self::select('id','title','code')->where('title','like','%'.$str.'%')->get();
    }

    public static function getStoreNameByID($id)
    {
        return self::where('site_id',$id)->paginate(15);
    }

    public static function insertIntoCoupons($array = array() )
    {
        return DB::table('coupons')->insert($array);
    }

    public static function checkExisted($title)
    {
        $check = self::where('title',$title)->count();
        if($check ==0 )
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public static  function getIdByTitle($title)
    {
        return self::select('id')->where('title',$title)->get();
    }

    public static function getListBestStore()
    {
//        return self::select('site_id')->
    }




    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','category_coupon','coupon_id','category_id');
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}