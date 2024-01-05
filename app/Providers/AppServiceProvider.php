<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\DentalService;

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

        View::composer('*', function($view)
        {
            $doctor_type = Doctor::where('type', 'Doctor')->take(10)->get();

            $view->with('doctors_type', $doctor_type);
        });

        View::composer('*', function($view)
        {
            $doctorClinics = Doctor::where('type', 'Clinics')->take(10)->get();

            $view->with('doctor_clinics', $doctorClinics);
        });

    }
}
