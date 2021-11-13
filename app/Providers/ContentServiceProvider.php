<?php

namespace App\Providers;

use App\DataPaud;
use App\Pendaftaran;
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

        $this->data_pendaftaran = Pendaftaran::where('status_pendaftaran', 'diproses')->count(); 
     
        view()->composer('frontend.layouts.master', function($view) {
            $view->with(['contents' => $this->data_paud, 'data_pendaftaran_notif' => $this->data_pendaftaran]);
        });

        view()->composer('layouts.master', function($view) {
            $view->with(['data_pendaftaran_notif' => $this->data_pendaftaran]);
        });


    }
}
