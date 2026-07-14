<?php

namespace App\Providers;

use App\Data\ProdukData;
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
        View::composer('partials.navbar', function ($view) {
            $view->with(
                'daftarKategori',
                ProdukData::daftarKategori()
            );
        });
    }
}
