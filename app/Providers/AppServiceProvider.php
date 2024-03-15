<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Bütün view-lar üçün verilənləri ötürən view composer
        View::composer('*', function ($view) {
            $settings = Setting::first(); // Varsayılan olaraq ilk Setting qeydini çəkirik
            $view->with('settings', $settings); // Bütün view-lara `settings` adı ilə ötürülür
        });
    }
}
