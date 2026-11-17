<?php

namespace JeffersonGoncalves\Filament\Gdpr\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Panel;
use JeffersonGoncalves\Filament\Gdpr\GdprPlugin;
use JeffersonGoncalves\Gdpr\Gdpr;

/**
 * Read-only view of laravel-gdpr's inventory: one card per model, one row per declared column.
 */
class PersonalDataInventory extends Page
{
    protected string $view = 'filament-gdpr::pages.inventory';

    /**
     * @return array<class-string, list<array<string, mixed>>>
     */
    public function getInventory(): array
    {
        $models = [];

        foreach (app(Gdpr::class)->inventory() as $row) {
            $models[$row['model']][] = $row;
        }

        return $models;
    }

    public static function label(string $group, ?string $value): ?string
    {
        return $value === null ? null : __("filament-gdpr::filament-gdpr.{$group}.{$value}");
    }

    public function getTitle(): string
    {
        return __('filament-gdpr::filament-gdpr.page.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-gdpr::filament-gdpr.page.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return GdprPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return GdprPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return GdprPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return GdprPlugin::get()->getSlug();
    }
}
