<?php

namespace App\Providers;

use App\Repositories\StarRepository;
use App\Repositories\StarRepositoryInterface;
use Dotenv\Repository\RepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
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
        //
        $this->app->bind(StarRepositoryInterface::class,StarRepository::class);
    }
}
