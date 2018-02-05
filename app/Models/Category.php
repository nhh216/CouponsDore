<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $slug = array(
        'build_from'=>'name',
        'save_to'=>'slug'
    );

    public static function getData(){
        return self::select()->where()->limit()->get();
    }
    public  static function getCatIdByName($name)
    {
        return self::select('id')->where('name',$name)->get();
    }

    public static function getCouponsByCategory($id)
    {
        
    }

    public function coupons()
    {
        return $this->belongsToMany('App\Models\Coupon', 'category_coupon', 'category_id', 'coupon_id');
    }
}