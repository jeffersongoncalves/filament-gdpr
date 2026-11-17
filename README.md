<div class="filament-hidden">

![Filament GDPR](https://raw.githubusercontent.com/jeffersongoncalves/filament-gdpr/2.x/art/jeffersongoncalves-filament-gdpr.png)

</div>

# Filament GDPR

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-gdpr.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gdpr)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-gdpr/tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-gdpr/actions?query=workflow%3Atests+branch%3A2.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-gdpr/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-gdpr/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-gdpr.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gdpr)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-gdpr.svg?style=flat-square)](LICENSE.md)

A personal data inventory page for your Filament panel, built on [laravel-gdpr](https://github.com/jeffersongoncalves/laravel-gdpr). It lists every column you declared with `#[PersonalData]`, grouped by model, with its category, purpose, legal basis, retention and anonymization strategy. It is the starting point of your records of processing activities (GDPR Art. 30).

## Features

- One card per model in `gdpr.models`, one row per declared column.
- Special category (Art. 9) and criminal (Art. 10) data highlighted.
- Columns without a lawful basis (Art. 6) flagged as "Not declared".
- 19 languages.

## Compatibility

| Plugin Version                                                      | Filament |
|---------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-gdpr/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-gdpr/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-gdpr/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-gdpr:"^2.0"
```

Declare your personal data and register the models as described in [laravel-gdpr](https://github.com/jeffersongoncalves/laravel-gdpr#usage).

## Usage

```php
use JeffersonGoncalves\Filament\Gdpr\GdprPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GdprPlugin::make()
                ->navigationGroup('GDPR')             // default: no group
                ->navigationSort(1)
                ->navigationIcon('heroicon-o-finger-print')
                ->slug('personal-data-inventory'),
        ]);
}
```

All fluent methods are optional. The page is read-only: the inventory lives in your code, next to the models.

> The page has no authorization of its own: register it only on panels whose users may see it, or override `canAccess()` in a subclass.

## Related plugins

- [filament-gdpr-dsar](https://github.com/jeffersongoncalves/filament-gdpr-dsar): data subject requests (Arts. 15 to 22).

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
