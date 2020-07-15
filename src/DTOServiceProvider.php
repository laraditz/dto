<?php

namespace Laraditz\DTO;

use Illuminate\Support\ServiceProvider;

class DTOServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                __NAMESPACE__ . '\Commands\DTOMakeCommand',
            ]);
        }
    }
}
