<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('coupons');
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('code')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('link_order')->nullable();
//            $table->string('short_desc')->nullable();
            $table->string('description')->nullable();
            $table->integer('amount')->nullable();
            $table->dateTime('exp_date')->nullable();
            $table->string('thumb')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
