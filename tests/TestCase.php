<?php

namespace ArielMejiaDev\LaravelVueCommands\Tests;

use ArielMejiaDev\LaravelVueCommands\LaravelVueCommandsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelVueCommandsServiceProvider::class,
        ];
    }
}