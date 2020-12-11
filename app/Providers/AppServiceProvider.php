<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(StudentServiceProvider::class);
        $this->app->register(TeacherServiceProvider::class);
        $this->app->register(ClassesServiceProvider::class);
        $this->app->register(CoursesServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
