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
            $table->integer('type_id')->nullable();
            $table->string('site_id')->nullable();
            $table->string('description')->nullable();
            $table->dateTime('exp_date')->nullable();
            $table->string('thumb')->nullable();
            $table->integer('views')->nullable();
            $table->integer('total_active')->nullable();
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
