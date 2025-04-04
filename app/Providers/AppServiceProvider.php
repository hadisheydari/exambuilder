<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Policies\CoursePolicy;
use App\Models\Course;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//
    }
}
