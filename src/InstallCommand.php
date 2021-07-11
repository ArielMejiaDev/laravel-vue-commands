<?php

namespace ArielMejiaDev\LaravelVueCommands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    protected $signature = 'vue-commands:install';

    protected $description = 'Install the Vue Commands stubs and commands';

    public function __construct()
    {
        parent::__construct();

        if (file_exists(app_path('Console/Commands/VueMakeCommand.php')) &&
            file_exists(app_path('Console/Commands/InertiaMakeCommand.php')))
        {
            $this->setHidden(true);
        }
    }

    public function handle()
    {
        // Publishing the stubs.
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs', base_path('stubs/'));

        // Publishing commands
        (new Filesystem)->copyDirectory(__DIR__.'/../src/Commands', app_path('Console/Commands'));

        $this->info('Commands & Stubs installed successfully.');
        $this->comment('Create vue components by typing: php artisan make:vue VueComponentName');
        $this->comment('Create vue components by typing: php artisan make:inertia InertiaComponentName');
    }
}
