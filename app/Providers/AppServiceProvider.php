<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ApartmentPhoto;
use App\Observers\ApartmentPhotoObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ApartmentPhoto::observe(ApartmentPhotoObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
