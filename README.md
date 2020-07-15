# Data Transfer Object

[![Latest Stable Version](https://poser.pugx.org/laraditz/dto/v/stable?format=flat-square)](https://packagist.org/packages/laraditz/dto)
[![Total Downloads](https://img.shields.io/packagist/dt/laraditz/action?style=flat-square)](https://packagist.org/packages/laraditz/dto)
[![License](https://poser.pugx.org/laraditz/dto/license?format=flat-square)](https://packagist.org/packages/laraditz/dto)
[![StyleCI](https://github.styleci.io/repos/7548986/shield?style=square)](https://github.com/laraditz/dto)

A simple data transfer object. Use with Laravel/Lumen or without framework.

## Installation

Via Composer

``` bash
$ composer require laraditz/dto
```

## Configuration

The Laravel and Lumen configurations vary slightly, so here are the instructions for each of the frameworks.

### Laravel

Edit the `config/app.php` file and add the following line to register the service provider:

```php
'providers' => [
    ...
    Laraditz\DTO\DTOServiceProvider::class,
    ...
],
```

> Tip: If you're on Laravel version **5.5** or higher, you can skip this part of the setup in favour of the Auto-Discovery feature.

### Lumen

Edit the `bootstrap/app.php` file and add the following line to register the service provider:

```php
...
$app->register(Laraditz\DTO\DTOServiceProvider::class);
...
```

### Others

Import the `Laraditz\DTO\DTO` class like usual.

## Usage

You can use `php artisan make:dto <name>` to create your action. For example, `php artisan make:dto PostData`. By default you can find it in `App/DTO` folder. 

Sample DTO file generated as below. For non-laravel usage, can simply follow below example as well. After that just add your attributes.

```php
namespace App\DTO;

use Laraditz\DTO\DTO;

class PostData extends DTO
{
    public $title;

    public $content;
}
```
## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Raditz Farhan](https://github.com/raditzfarhan)

## License

MIT. Please see the [license file](LICENSE) for more information.

