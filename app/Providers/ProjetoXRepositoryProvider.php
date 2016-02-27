<?php

namespace ProjetoX\Providers;

use Illuminate\Support\ServiceProvider;

class ProjetoXRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \ProjetoX\Repositories\ClientRepository::class,
            \ProjetoX\Repositories\ClientRepositoryEloquent::class);
        $this->app->bind(
            \ProjetoX\Repositories\ProjectRepository::class,
            \ProjetoX\Repositories\ProjectRepositoryEloquent::class);
    }
}
