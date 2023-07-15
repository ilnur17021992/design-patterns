<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DesignPatterns\Creational\Singleton\LaravelSingleton;
use App\DesignPatterns\Structural\Adapter\MediaLibraryAdapter;
use App\DesignPatterns\Creational\Singleton\Interfaces\LaravelSingletonInterface;
use App\DesignPatterns\Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;
use App\DesignPatterns\Structural\Adapter\MediaLibrarySelfWritten;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        LaravelSingletonInterface::class => LaravelSingleton::class
    ];

    public $bindings = [
        // MediaLibraryThirdPartyInterface::class => MediaLibrarySelfWritten::class,
        MediaLibraryThirdPartyInterface::class => MediaLibraryAdapter::class,
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
