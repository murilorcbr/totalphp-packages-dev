<?php

namespace TotalPHP\MeetUp;

use Illuminate\Support\ServiceProvider;

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
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/meetup.php',
            'meetup'
        );
    }
}
