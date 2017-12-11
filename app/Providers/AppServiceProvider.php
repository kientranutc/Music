<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
                'Users\UserRepositoryInterface' => 'Users\UserRepository',
                'GenerateKey\GenerateKeyRepositoryInterface' => 'GenerateKey\GenerateKeyRepository'
        ];
        foreach($repositories as $key=>$val){
            $this->app->bind("App\\Repositories\\$key", "App\\Repositories\\$val");
        }

    }
}
