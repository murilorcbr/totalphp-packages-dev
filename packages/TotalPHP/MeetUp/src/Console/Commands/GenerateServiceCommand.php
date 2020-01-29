<?php

namespace TotalPHP\MeetUp\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class GenerateServiceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'generate:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a service with a contract';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

        /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../stubs/Services/service.stub';
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


    /**
     * Build the class with the given name.
     *
     * Remove the base controller import if we are already in base namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {

        $serviceNamespace = $this->getNamespace($name);

        $replace = [];

        $replace = $this->buildInterface();

        return str_replace(
            array_keys($replace), array_values($replace), parent::buildClass($name)
        );
    }

    /**
     * Build the replacements for a parent controller.
     *
     * @return array
     */
    protected function buildInterface()
    {

        $className = $this->argument('name');

        $interfaceName = $className . 'Interface';

        $this->call('generate:service-interface', ['name' => $interfaceName]);

        return [
            'DummyInterface' => last(explode('/', $interfaceName)),
        ];
    }

}
