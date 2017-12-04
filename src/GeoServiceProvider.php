<?php
namespace Empari\Geo;

use Empari\Geo\Providers\RepositoryServiceProvider;
use Empari\Geo\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class GeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Migrations
        $this->publishes([
            __DIR__ . '/../database/migrations' => base_path('database/migrations')
        ], 'migrations');

        $this->app->register(RepositoryServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }

    public function register()
    {
        //
    }
}