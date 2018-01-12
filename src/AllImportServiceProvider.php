<?php

namespace Unikat\AllImport;

use Illuminate\Support\ServiceProvider;
use Unikat\AllImport\Providers\RouteServiceProvider;

class AllImportServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->publishes([ALL_IMPORT_PATH . '/config/all-import.php' => config_path('all-import.php')], 'config');
    }
    
    public function register()
    {
        if(!defined('ALL_IMPORT_PATH')) {
            define('ALL_IMPORT_PATH', realpath(__DIR__ . '/../'));
        }
        
        $this->mergeConfigFrom(ALL_IMPORT_PATH . '/config/all-import.php', 'all-import');
        
        if(!$this->app['config']['all-import.enabled']) {
            return;
        }
        
        $this->app->register(RouteServiceProvider::class);
    }
}