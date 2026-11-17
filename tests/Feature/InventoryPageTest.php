<?php

use JeffersonGoncalves\Filament\Gdpr\GdprPlugin;
use JeffersonGoncalves\Filament\Gdpr\Pages\PersonalDataInventory;
use JeffersonGoncalves\Filament\Gdpr\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Admin', 'email' => 'admin@example.com']));
});

it('lists every declared column grouped by model', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSuccessful()
        ->assertSee('Personal data inventory')
        ->assertSee('TestUser')
        ->assertSee('email')
        ->assertSee('Account login')
        ->assertSee('Contract (Art. 6(1)(b))')
        ->assertSee('5 years')
        ->assertSee('Hash')
        ->assertSee('Special category (Art. 9)');
});

it('flags columns without a legal basis', function () {
    Livewire::test(PersonalDataInventory::class)
        ->assertSee('Not declared');
});

it('explains how to register models when the inventory is empty', function () {
    config()->set('gdpr.models', []);

    Livewire::test(PersonalDataInventory::class)
        ->assertSee('No models registered');
});

it('applies the fluent plugin options', function () {
    GdprPlugin::get()->navigationGroup('GDPR')->navigationSort(3)->slug('inventory');

    expect(PersonalDataInventory::getNavigationGroup())->toBe('GDPR')
        ->and(PersonalDataInventory::getNavigationSort())->toBe(3)
        ->and(PersonalDataInventory::getSlug())->toBe('inventory');
});
