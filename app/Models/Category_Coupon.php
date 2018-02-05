<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;

class Category_Coupon extends Model
{
    protected $table = 'category_coupon';

    public static function insertIntoCategoryCoupon($array = array())
    {
        return DB::table('category_coupon')->insert($array);
    }
}
