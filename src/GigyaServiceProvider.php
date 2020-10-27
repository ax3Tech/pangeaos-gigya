<?php

namespace Digitalatrium\Gigya;

use \Illuminate\Support\ServiceProvider;
use Digitalatrium\Gigya\Service\GSRequest;

class GigyaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Digitalatrium\Gigya\Service\GSException');
        $this->app->make('Digitalatrium\Gigya\Service\GSKeyNotFoundException');
        $this->app->make('Digitalatrium\Gigya\Service\GSObject');
        $this->app->make('Digitalatrium\Gigya\Service\GSRequest');
        $this->app->make('Digitalatrium\Gigya\Service\GSResponse');
        $this->app->make('Digitalatrium\Gigya\Service\SigUtils');
        $this->app->make('Digitalatrium\Gigya\Service\GSArray');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        (static function () {
            static::__constructStatic();
        })->bindTo(null, GSRequest::class)();
    }
}
