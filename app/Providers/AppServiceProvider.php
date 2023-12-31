<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\DentalService;
use App\Models\Service;

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
        Paginator::useBootstrap();

        View::composer('*', function($view)
        {
            $dentalServices = DentalService::with('pages')->get();

            $view->with('dentalNavs', $dentalServices);
        });

        View::composer('*', function($view)
        {
            $services = Service::all();

            $view->with('services_nav', $services);
        });

    }
}
