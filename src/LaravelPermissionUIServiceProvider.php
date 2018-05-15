<?php
/**
 * Created by PhpStorm.
 * User: darwin
 * Date: 15/5/18
 * Time: 9:07 AM
 */

namespace Dsalinas\LPUI;

use Illuminate\Support\ServiceProvider;


/**
 * Class LaravelPermissionUIServiceProvider
 * @package Dsalinas\LPUI
 */
class LaravelPermissionUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/lpui.php', 'lpui'
        );

        $this->publishes([
            __DIR__ . '/../config/lpui.php' => config_path('lpui.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/assets/js/components' => base_path('resources/assets/js/components/lpui'),
        ], 'lpui-components');


        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'lpui');


    }

    public function register()
    {
        
    }
}