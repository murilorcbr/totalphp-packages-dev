<?php

namespace TotalPHP\MeetUp\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class GenerateServiceInterfaceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'generate:service-interface';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a contract for service';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Interface';

        /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../stubs/Services/service.contract.stub';
    }

        /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}
