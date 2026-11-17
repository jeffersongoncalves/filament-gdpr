<?php

namespace JeffersonGoncalves\Filament\Gdpr;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-gdpr')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
