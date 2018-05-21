<?php

namespace App\Providers;
use App\Services\FaceService;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(\My\Service::class, function ($app) {
    return new \My\Service($app->make('My\AnotherService'));
});
    }
}
