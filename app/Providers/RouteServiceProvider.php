<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    
    public function map()
    {
        \Config::set('filesystems.disks.public.url',url('storage/app/public'));
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapAdminRoutes();
        $this->mapHelpRoutes();
    }

    
    protected function mapWebRoutes()
    {
        Route::middleware(['web','Lang'])
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

    }

    protected function mapAdminRoutes()
    {
        Route::middleware(['web','Lang'])
             ->namespace($this->namespace)
             ->group(base_path('routes/admin.php'));
    }

    protected function mapHelpRoutes()
    {
        Route::middleware(['web','Lang'])
             ->namespace($this->namespace)
             ->group(base_path('routes/help.php'));
    }

   
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
