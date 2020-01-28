<?php

namespace TotalPHP\MeetUp;

use Illuminate\Support\ServiceProvider;
use TotalPHP\MeetUp\Console\Commands\GenerateServiceCommand;

/**
 * Class MeetUpServiceProvider
 * @package   TotalPHP\MeetUp
 * @author    Murilo Santos <murilorcbr@gmail.com>
 */
class MeetUpServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../config/meetup.php' => config_path('meetup.php'),
            ]
        );

        $this->loadMigrationsFrom(__DIR__ . '/Models/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateServiceCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/meetup.php',
            'meetup'
        );
    }
}
