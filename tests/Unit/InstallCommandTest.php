<?php

namespace ArielMejiaDev\LaravelVueCommands\Tests\Unit;

use ArielMejiaDev\LaravelVueCommands\Tests\TestCase;

class InstallCommandTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMockingConsoleOutput();
    }

    /** @test */
    public function it_tests_package_can_be_installed(): void
    {
        $this->artisan('vue-commands:install');
        $this->assertTrue(file_exists(app_path('Console/Commands/VueMakeCommand.php')));
        $this->assertTrue(file_exists(app_path('Console/Commands/InertiaMakeCommand.php')));
        $this->assertTrue(file_exists(base_path('stubs/vue-component.stub')));
    }
}