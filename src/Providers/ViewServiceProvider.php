<?php

namespace Unikat\AllImport\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
    
    }
    
    public function register()
    {
        $this->loadViewsFrom(ALL_IMPORT_PATH . '/resources/views', 'all-import');
    }
}