<?php

namespace ArielMejiaDev\LaravelVueCommands;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class LaravelVueCommandsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Registering package commands.
             $this->commands([InstallCommand::class]);
        }
    }

    public function provides(): array
    {
        return [InstallCommand::class];
    }
}
