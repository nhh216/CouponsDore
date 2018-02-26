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

    }

    public function register()
    {
        $this->app->register(ModuleProvider::class);
    }
}