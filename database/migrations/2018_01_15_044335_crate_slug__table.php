<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Category;
use App\Models\Coupon;

class CrateSlugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $list = Category::all();
            foreach($list as $val) {
                $val->slug = str_slug($val->name, '-').'-'.$val->id;
                $val->save();
            }
        });
        Schema::table('coupons', function (Blueprint $table) {
            $list = App\Models\Coupon::all();
            foreach($list as $val) {
                $val->slug = str_slug($val->name, '-').'-'.$val->id;
                $val->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slug', function (Blueprint $table) {
            //
        });
    }
}
