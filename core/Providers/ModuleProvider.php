<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/26/2018
 * Time: 4:53 PM
 */

namespace Core\Providers;


class ModuleProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(YOURCOUPON_PATH.'Frontend/route.php');

    }

    public function register()
    {

    }
}