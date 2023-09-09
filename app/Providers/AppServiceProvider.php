<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\AgriInfo;
use App\Models\Project;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.website',
            function ($view) {
                $view->with('all_data', AgriInfo::all());
                $view->with('all_project_nav', Project::all());
            }
        );
    }
}
