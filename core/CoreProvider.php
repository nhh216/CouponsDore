<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/26/2018
 * Time: 4:49 PM
 */

namespace Core;

use Illuminate\Support\ServiceProvider;
use Core\Providers\ModuleProvider;

class CoreProvider extends ServiceProvider
{
    public function boot()
    {
        die(1);
    }

    public function register()
    {
//        die(YOURCOUPON_PATH);
        $this->loadRoutesFrom(YOURCOUPON_PATH.'Frontend/route.php');
        $this->loadViewsFrom(YOURCOUPON_PATH. 'Frontend/Views', 'frontend');
        $this->app->register(ModuleProvider::class);
    }
}