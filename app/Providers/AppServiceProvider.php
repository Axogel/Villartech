<?php

namespace App\Providers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $defaultLocale = 'en'; // Establece el valor por defecto que deseas

        $locale = session()->get('locale', $defaultLocale);
        App::setLocale($locale);
        Session::put('locale', $locale);
    }
}
