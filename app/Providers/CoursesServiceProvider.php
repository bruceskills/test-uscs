<?php

namespace App\Providers;

use App\Services\CoursesService;
use Illuminate\Support\ServiceProvider;

class CoursesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->bind('App\Services\Interfaces\CoursesServiceInterface','App\Services\CoursesService');
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
