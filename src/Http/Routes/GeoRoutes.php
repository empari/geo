<?php namespace Empari\Geo\Http\Routes;

use Empari\Laravel\Support\Http\Routing\RouteFileApi;

class GeoRoutes extends RouteFileApi
{
    /**
     * Define Routes
     */
    protected function routes()
    {
        $this->router->prefix('geo')->name('geo.')->group(function () {
            $this->publicRoutes();
            $this->router->middleware(['auth', 'jwt.auth'])->group(function () {
                $this->privateRoutes();
            });
        });
    }

    public function privateRoutes()
    {
        //
    }

    public function publicRoutes()
    {
        $this->router->get('cities')
            ->uses('CityController@index')
            ->name('cities.index');

        $this->router->get('states')
            ->uses('StateController@index')
            ->name('states.index');

        $this->router->get('countries')
            ->uses('CountryController@index')
            ->name('countries.index');
    }
}