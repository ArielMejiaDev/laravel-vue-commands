<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class VueMakeCommand extends GeneratorCommand
{
    protected string $directory;

    public function __construct(Filesystem $files)
    {
        parent::__construct($files);
        $this->directory = config('vue-commands.vue-components-directory', 'Components');
    }

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:vue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue template';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Vue component';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return base_path('stubs/vue-component.stub');
    }

    /**
     * Determine if the class already exists.
     *
     * @param  string  $rawName
     * @return bool
     */
    protected function alreadyExists($rawName): bool
    {
        $name = Str::of($rawName)->remove('App\\')->replace('\\', '/');
        $path = "{$this->laravel['path']}/../resources/js/{$this->directory}/{$name}.vue";
        return file_exists($path);
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name): VueMakeCommand
    {
        $name = Str::of($name)->remove('App\\')->replace('\\', '');
        $stub = str_replace('{{ component }}', $name, $stub);
        return $this;
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name): string
    {
        $name = Str::of($name)->remove('App\\')->replace('\\', '/');
        return "{$this->laravel['path']}/../resources/js/{$this->directory}/{$name}.vue";
    }
}
