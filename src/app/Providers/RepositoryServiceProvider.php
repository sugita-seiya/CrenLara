<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\User\UserDataAccessRepositoryInterface::class,function($app){
            // dd('成功');
            // $a= new \App\Repositories\User\UserDataAccessQBRepository(new \App\Entities\User, new \App\Entities\Article);
            // dd($a);
            return new \App\Repositories\User\UserDataAccessQBRepository(new \App\Article);
        });
        // $this->app->bind(
        //     \App\Repositories\User\UserDataAccessRepositoryInterface::class,
        //     \App\Repositories\User\UserDataAccessQBRepository::class
        // );
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
