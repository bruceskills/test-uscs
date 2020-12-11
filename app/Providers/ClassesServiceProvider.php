<?php

namespace App\Providers;

use App\Services\ClassesService;
use Illuminate\Support\ServiceProvider;

class ClassesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->bind('App\Services\Interfaces\ClassesServiceInterface','App\Services\ClassesService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
