<?php

namespace JaynilSavani\VolerPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class VolerPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('voler', function (UiCommand $command) {
            $valorLTEPreset = new VolerPreset($command);
            $valorLTEPreset->install();

            $command->info('Voler scaffolding installed successfully.');

            if ($command->option('auth')) {
                $valorLTEPreset->installAuth();
                $command->info('Voler CSS auth scaffolding installed successfully.');
            }
        });
    }
}
