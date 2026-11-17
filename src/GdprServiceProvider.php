<?php

namespace JeffersonGoncalves\Filament\Gdpr;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GdprServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-gdpr';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }
}
