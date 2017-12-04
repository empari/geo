<?php namespace Empari\Geo\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Empari\Geo\Repositories\Contracts\CityRepository::class, \Empari\Geo\Repositories\Eloquent\CityRepositoryEloquent::class);
        $this->app->bind(\Empari\Geo\Repositories\Contracts\CountryRepository::class, \Empari\Geo\Repositories\Eloquent\CountryRepositoryEloquent::class);
        $this->app->bind(\Empari\Geo\Repositories\Contracts\StateRepository::class, \Empari\Geo\Repositories\Eloquent\StateRepositoryEloquent::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
