<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        // Essa linha de código serve para limitar a quantidade de
        // caracteres que dariam erros na hora de hospedar o site.
        Schema::defaultStringLength(191);
    }
}
