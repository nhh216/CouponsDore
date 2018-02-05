<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = 'sites';

    public static function getAllStores()
    {
        return self::select('id','name','slug')->get();
    }

    public static function getInfoStoreByID($id)
    {
        return self::where('id',$id)->get();
    }
    public  static function getHomePage($id)
    {
        return self::select('homepage')->where('id',$id)->get();
    }
    public static function getStoreByKeySearch($str)
    {
        return self::select('id','name','logo','slug')->where('name','like','%'.$str.'%')->get();
    }

    public static function getIdByShortName($name)
    {
        return self::select('id')->where('short_name','like',$name)->get();
    }

    public static function getLogoById($id)
    {

    }

    public  function coupons()
    {
        return $this->hasMany(Coupon::class);
    }
}
