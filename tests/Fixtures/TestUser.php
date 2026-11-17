<?php

namespace JeffersonGoncalves\Filament\Gdpr\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use JeffersonGoncalves\Gdpr\Attributes\PersonalData;
use JeffersonGoncalves\Gdpr\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Gdpr\Contracts\HasPersonalData;
use JeffersonGoncalves\Gdpr\Enums\AnonymizeStrategy;
use JeffersonGoncalves\Gdpr\Enums\DataCategory;
use JeffersonGoncalves\Gdpr\Enums\LegalBasis;

#[PersonalData('email', purpose: 'Account login', legalBasis: LegalBasis::Contract, retention: '5 years', anonymize: AnonymizeStrategy::Hash)]
#[PersonalData('health_notes', category: DataCategory::Special, purpose: 'Accessibility support')]
class TestUser extends Authenticatable implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
