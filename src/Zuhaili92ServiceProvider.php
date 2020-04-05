<?php

namespace Zuhaili92\LaravelPreset;

use Zuhaili92\Preset;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class Zuhaili92ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('asdf', function ($command) {
            Preset::install();
        });
    }
}
