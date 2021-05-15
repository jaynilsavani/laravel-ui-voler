<?php

namespace JaynilSavani\VolerPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Ui\UiCommand;

class FortifyVolerPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('voler-fortify', function (UiCommand $command) {
            $fortifyAdminLTEPreset = new VolerPreset($command, true);
            $fortifyAdminLTEPreset->install();

            $command->info('Voler scaffolding installed successfully for Laravel Fortify.');

            if ($command->option('auth')) {
                $fortifyAdminLTEPreset->installAuth();
                $command->info('Voler CSS auth scaffolding installed successfully for Laravel Fortify.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        if (class_exists(Fortify::class)) {
            Fortify::loginView(function () {
                return view('auth.login');
            });

            Fortify::registerView(function () {
                return view('auth.register');
            });

            Fortify::confirmPasswordView(function () {
                return view('auth.passwords.confirm');
            });

            Fortify::requestPasswordResetLinkView(function () {
                return view('auth.passwords.email');
            });

            Fortify::resetPasswordView(function () {
                return view('auth.passwords.reset');
            });

            Fortify::verifyEmailView(function () {
                return view('auth.verify');
            });
        }
    }
}
