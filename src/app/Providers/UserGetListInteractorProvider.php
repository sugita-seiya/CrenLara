<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interactor\UserGetListInteractor;

class UserGetListInteractorProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UserGetListInteractor', UserGetListInteractor::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
