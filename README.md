# Laravel Vue Commands

<img src="https://banners.beyondco.de/Laravel%20Vue%20Commands.png?theme=light&packageManager=composer+require&packageName=ArielMejiaDev%2Flaravel-make-vue-commands&pattern=wiggle&style=style_1&description=adds+artisan+commands+to+create+VueJS+%26+InertiaJS+components&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arielmejiadev/laravel-vue-commands.svg?style=flat-square)](https://packagist.org/packages/arielmejiadev/laravel-vue-commands)
[![Total Downloads](https://img.shields.io/packagist/dt/arielmejiadev/laravel-vue-commands.svg?style=flat-square)](https://packagist.org/packages/arielmejiadev/laravel-vue-commands)
![GitHub Actions](https://github.com/arielmejiadev/laravel-vue-commands/actions/workflows/main.yml/badge.svg)

This package adds artisan commands to create VueJS components and InertiaJS components.

## Installation

You can install the package via composer:

```bash
composer require arielmejiadev/laravel-vue-commands --dev
```

## Publish Commands & Stubs

```
php artisan vue-commands:install
```

## Usage

Create a VueJS components:
```
php artisan make:vue Badge
```
You can see the component from `resources/js/Badge.vue`

Create an InertiaJS components:
```
php artisan make:inertia Users/Index
```
You can see the component from `resources/js/Pages/Users/Index.vue`

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email arielmejiadev@gmail.com instead of using the issue tracker.

## Credits

-   [Ariel Mejia Dev](https://github.com/arielmejiadev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
