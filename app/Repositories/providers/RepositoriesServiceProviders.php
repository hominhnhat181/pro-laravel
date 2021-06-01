<?php

namespace App\Repositories\providers;
use Illuminate\Support\ServiceProvider;
class RepositoriesServiceProviders extends ServiceProvider{
    public function register(){

        $this->app->singleton(
            \App\Repositories\interfaces\UserRepositoryInterface::class,
            \App\Repositories\UserRepository::class
            ); 
            
        $this->app->singleton(
            \App\Repositories\interfaces\CategoryRepositoryInterface::class,
            \App\Repositories\CategoryRepository::class
            );

        $this->app->singleton(
            \App\Repositories\interfaces\TypeRepositoryInterface::class,
            \App\Repositories\TypeRepository::class
            );
            
        $this->app->singleton(
            \App\Repositories\interfaces\GameRepositoryInterface::class,
            \App\Repositories\GameRepository::class
            );
        $this->app->singleton(
                \App\Repositories\interfaces\AppRepositoryInterface::class,
                \App\Repositories\AppRepository::class
                );
            
      
    }
}