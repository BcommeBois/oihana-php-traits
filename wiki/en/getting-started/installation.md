# Installation

## Requirements

- **PHP 8.4 or higher.**
- **[Composer](https://getcomposer.org/).**

No special PHP extension is required by the library itself.

## Install via Composer

```bash
composer require oihana/php-traits
```

## Autoloading

The package is autoloaded via PSR-4:

```json
{
    "autoload": {
        "psr-4": {
            "oihana\\traits\\": "src/oihana/traits"
        }
    }
}
```

Import the traits directly into your classes:

```php
use oihana\traits\ContainerTrait;
use oihana\traits\ConfigTrait;
use oihana\traits\IDTrait;
```

## Next steps

- [Dependencies](dependencies.md)
- [Container & config](../container-config.md)
