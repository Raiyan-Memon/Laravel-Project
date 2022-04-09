<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\Modules\AccountRepositoryInterface;
use App\Repository\Modules\AccountRepository;

use App\Interface\Modules\ContactRepositoryInterface;
use App\Repository\Modules\ContactRepository;

use App\Interface\Modules\ProjectRepositoryInterface;
use App\Repository\Modules\ProjectRepository;

use App\Interface\Modules\UserRepositoryInterface;
use App\Repository\Modules\UserRepository;



class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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
