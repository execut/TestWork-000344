<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        $httpsHosts = [
            'http://books-app.test',
            'http://books-app.execut.co',
        ];
        $currentUrl = URL::current();

        foreach ($httpsHosts as $httpsHost) {
            if (strpos($currentUrl, $httpsHost) === 0) {
                URL::forceScheme('https');
            }
        }
        //
    }
}
