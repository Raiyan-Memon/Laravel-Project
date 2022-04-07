<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\AccountRepositoryInterface;
use App\Repository\AccountRepo;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AccountRepositoryInterface::class, AccountRepo::class);
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
