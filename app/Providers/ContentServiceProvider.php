<?php

namespace App\Providers;

use App\DataPaud;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->data_paud = DataPaud::first();

        view()->composer('frontend.layouts.master', function($view) {
            $view->with(['contents' => $this->data_paud]);
        });
    }
}
