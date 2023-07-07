<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DesignPatterns\Creational\Singleton\LaravelSingleton;
use App\DesignPatterns\Creational\Singleton\Interfaces\LaravelSingletonInterface;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        LaravelSingletonInterface::class => LaravelSingleton::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
