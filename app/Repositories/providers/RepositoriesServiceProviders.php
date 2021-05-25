<?php

namespace App\Repositories\Providers;
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
            \App\Repositories\interfaces\ObjectRepositoryInterface::class,
            \App\Repositories\ObjectRepository::class
            );
            
      
    }
}