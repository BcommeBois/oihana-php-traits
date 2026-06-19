# Installation

## Prérequis

- **PHP 8.4 ou supérieur.**
- **[Composer](https://getcomposer.org/).**

La bibliothèque n'exige aucune extension PHP particulière.

## Installation via Composer

```bash
composer require oihana/php-traits
```

## Chargement automatique

Le paquet est chargé via PSR-4 :

```json
{
    "autoload": {
        "psr-4": {
            "oihana\\traits\\": "src/oihana/traits"
        }
    }
}
```

Importez les traits directement dans vos classes :

```php
use oihana\traits\ContainerTrait;
use oihana\traits\ConfigTrait;
use oihana\traits\IDTrait;
```

## Étapes suivantes

- [Dépendances](dependencies.md)
- [Conteneur & config](../container-config.md)
