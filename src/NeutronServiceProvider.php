<?php

namespace Neutron\LaravelPreset;

use Neutron\Preset;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class NeutronServiceProvider extends ServiceProvider
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
