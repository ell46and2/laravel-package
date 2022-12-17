<?php

namespace EllAlderton\Example;

use EllAlderton\Example\Commands\ExampleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_example_table')
            ->hasCommand(ExampleCommand::class);
    }
}
