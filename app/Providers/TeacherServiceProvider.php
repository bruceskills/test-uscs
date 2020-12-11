<?php

namespace App\Providers;

use App\Services\TeacherService;
use Illuminate\Support\ServiceProvider;

class TeacherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->bind('App\Services\Interfaces\TeacherServiceInterface','App\Services\TeacherService');
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
