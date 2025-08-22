<?php

namespace Intrfce\Auspex;

use Intrfce\Auspex\Commands\AuspexCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AuspexServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('auspex')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_auspex_table')
            ->hasCommand(AuspexCommand::class);
    }
}
