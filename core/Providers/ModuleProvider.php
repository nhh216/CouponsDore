<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/26/2018
 * Time: 4:53 PM
 */

namespace Core\Providers;

use Illuminate\Support\ServiceProvider;


class ModuleProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(YOURCOUPON_PATH.'Frontend/route.php');
        $this->loadViewsFrom(YOURCOUPON_PATH. 'Frontend/Views', 'frontend');
    }

}