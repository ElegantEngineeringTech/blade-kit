# Laravel Blade UI Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elegantly/blade-kit.svg?style=flat-square)](https://packagist.org/packages/elegantly/blade-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ElegantEngineeringTech/blade-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ElegantEngineeringTech/blade-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ElegantEngineeringTech/blade-kit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ElegantEngineeringTech/blade-kit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elegantly/blade-kit.svg?style=flat-square)](https://packagist.org/packages/elegantly/blade-kit)

A simple UI kit for Laravel. Based on Tailwind and AlpineJS.

## Installation

You can install the package via composer:

```bash
composer require elegantly/blade-kit
```

To make it work with tailwindcss v4, you must add the following lines to your `app.css`.

```css
@import "../../vendor/elegantly/blade-kit/resources/css/styles.css";
@source "../../vendor/elegantly/blade-kit/resources/views/**/*.blade.php";
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="blade-kit-config"
```

This is the contents of the published config file:

```php
return [
 //
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="blade-kit-views"
```

## Usage

```html
<x-kit::button color="white" class="rounded-md font-semibold">
    Button
</x-kit::button>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Quentin Gabriele](https://github.com/QuentinGab)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
