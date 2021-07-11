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

        $this->publishes([
            __DIR__.'/../config/config.php' =>  config_path('vue-commands.php'),
        ], 'vue-commands-config');

    }

    public function provides(): array
    {
        return [InstallCommand::class];
    }
}
