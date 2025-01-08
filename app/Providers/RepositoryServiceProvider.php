<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{UserRepository,CategoryRepository};
use App\Interfaces\{UserRepositoryInterface,CategoryRepositoryInterface};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
