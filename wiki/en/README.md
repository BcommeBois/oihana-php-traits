# oihana/php-traits — reusable object traits for PHP

![Language](https://img.shields.io/badge/language-English-blue)

`oihana/php-traits` is a PHP 8.4+ library bundling small, **single-responsibility, composable traits** you can mix into your own classes: DI-container awareness, identifiers, key-value access, configuration, lazy/lockable state, URI building and string-expression helpers.

![Oihana PHP Traits](https://raw.githubusercontent.com/BcommeBois/oihana-php-traits/main/assets/images/oihana-php-traits-logo-inline-512x160.png)

## Quick start

```php
use DI\Container;
use oihana\traits\IDTrait;
use oihana\traits\ContainerTrait;

class Product
{
    use ContainerTrait;
    use IDTrait;

    public function __construct( array $init = [] )
    {
        $this->initializeID( $init );
    }
}

$p = new Product([ 'id' => 42 ]);
echo $p->id; // 42
```

## Table of contents

### Getting started — [`getting-started/`](getting-started/)

- [Introduction](getting-started/introduction.md) — what the library is and the *oihana* philosophy.
- [Installation](getting-started/installation.md) — PHP 8.4+ and `composer require`.
- [Dependencies](getting-started/dependencies.md) — the `oihana/*` and vendor packages used.

### Traits

- [Container & config](container-config.md) — `ContainerTrait`, `ConfigTrait`, `KeyValueTrait`.
- [Identifiers](identifiers.md) — `IDTrait`, `QueryIDTrait`.
- [State](state.md) — `LazyTrait`, `LockableTrait`, `SortDefaultTrait`, `JsonOptionsTrait`, `DateTrait`.
- [Strings & URI](strings-uri.md) — `ToStringTrait`, `UriTrait`, `strings\ExpressionTrait`, `UnsupportedTrait`.

### Cross-cutting

- [Tests & coverage](testing.md) — run the suite and measure coverage.

## Source code

The library code lives under [`src/oihana/traits/`](../../src/oihana/traits/) — namespace `oihana\traits`.

## See also

- [Packagist `oihana/php-traits`](https://packagist.org/packages/oihana/php-traits).
- [API reference (phpDocumentor)](https://bcommebois.github.io/oihana-php-traits).
