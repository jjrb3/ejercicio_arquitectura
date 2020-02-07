<?php

namespace App\Providers;

use App\UseCases\GetMoviesUsecase;
use App\UseCases\Interfaces\GetMoviesUsecaseInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Class UseCaseServiceProvider
 * @package App\Providers
 */
class UseCaseServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    public $classes = [
        GetMoviesUsecaseInterface::class => GetMoviesUsecase::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
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
