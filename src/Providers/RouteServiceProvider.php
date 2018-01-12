<?php

namespace Unikat\AllImport\Providers;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    
    /**
     * @var Kernel
     */
    protected $kernel;
    
    /**
     * @param Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group([
            'as' => 'all-import.',
            'prefix' => config('all-import.route'),
            'namespace' => $this->getNamespace(),
            'middleware' => $this->getMiddleware()
        ], function() {
            $this->getRoutes();
        });
    }
    
    /**
     * @param Router $router
     * @param Kernel|\Illuminate\Foundation\Http\Kernel $kernel
     *
     * @return void
     */
    public function boot(Router $router, Kernel $kernel)
    {
        $this->map($router);
        
        $this->kernel = $kernel;
    }
    
    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function getMiddleware()
    {
        $middleware = config('all-import.middleware');
        
        return $middleware;
    }
    
    /**
     * @return string
     */
    protected function getNamespace()
    {
        return 'Unikat\AllImport\Http\Controllers';
    }
    
    protected function getRoutes()
    {
        require ALL_IMPORT_PATH . '/routes/web.php';
    }
    
    /**
     * @return void
     */
    public function register()
    {
    
    }
}