<?php namespace Empari\Geo\Providers;

use Empari\Geo\Http\Routes\GeoRoutes;
use Empari\Laravel\Support\Http\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string/
     */
    protected $namespace = 'Empari\Geo\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->registerRouteClass(GeoRoutes::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        //
    }
}