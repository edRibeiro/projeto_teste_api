<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\ProfessionalRepository::class, \App\Repositories\ProfessionalRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EstablishmentRepository::class, \App\Repositories\EstablishmentRepositoryEloquent::class);
        //:end-bindings:
    }
}
