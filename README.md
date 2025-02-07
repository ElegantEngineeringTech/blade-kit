# Laravel Blade UI Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elegantly/blade-kit.svg?style=flat-square)](https://packagist.org/packages/elegantly/blade-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/elegantengineeringtech/blade-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/elegantengineeringtech/blade-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/elegantengineeringtech/blade-kit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/elegantengineeringtech/blade-kit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elegantly/blade-kit.svg?style=flat-square)](https://packagist.org/packages/elegantly/blade-kit)

A simple UI kit for Laravel. Based on Tailwind and AlpineJS.

## Installation

You can install the package via composer:

```bash
composer require elegantly/blade-kit
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="blade-kit-config"
```

This is the contents of the published config file:

```php
use Elegantly\Kit\Ui\Base;
use Elegantly\Kit\Ui\Button;
use Elegantly\Kit\Ui\Input;
use Elegantly\Kit\Ui\Select;
use Elegantly\Kit\Ui\SwitchUi;
use Elegantly\Kit\Ui\Tag;

return [

    'ui' => [
        'base' => Base::class,
        'button' => Button::class,
        'input' => Input::class,
        'select' => Select::class,
        'tag' => Tag::class,
        'switch' => SwitchUi::class,
    ],

];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="blade-kit-views"
```

## Usage

```html
<x-kit::button class="rounded-md font-semibold" color="white">
    Button
</x-kit::button>
```

See full documentation [here](https://elegantengineering.tech/blade-kit#buttons).

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
