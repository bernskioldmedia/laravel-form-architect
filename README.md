# A form builder for Laravel aimed at Blade components.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bernskioldmedia/laravel-form-architect.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-form-architect)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bernskioldmedia/laravel-form-architect/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bernskioldmedia/laravel-form-architect/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bernskioldmedia/laravel-form-architect.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-form-architect)

## Prerequisites

- Laravel 10 or higher
- PHP 8.2 or higher

## Installation

You can install the package via composer:

```bash
composer require bernskioldmedia/laravel-form-architect
```

### Publishing config and views

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-form-architect-config"
```

This is the contents of the published config file:

```php
<?php

return [];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-form-architect-views"
```

## Usage

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Bernskiold Media](https://github.com/bernskioldmedia)
- [Erik Bernskiold](https://github.com/erikbernskiold)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
