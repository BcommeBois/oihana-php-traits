# Dependencies

`oihana/php-traits` keeps a small footprint and sits low in the `oihana/*` stack.

## Runtime dependencies

| Package | Used by | Role |
|---|---|---|
| [`oihana/php-core`](https://github.com/BcommeBois/oihana-php-core) | `KeyValueTrait` | `oihana\core\arrays\isIndexed()` and other core helpers. |
| [`oihana/php-enums`](https://github.com/BcommeBois/oihana-php-enums) | several | The `Char` enum (separators, braces, quotes…). |
| [`oihana/php-exceptions`](https://github.com/BcommeBois/oihana-php-exceptions) | `UnsupportedTrait` | `UnsupportedOperationException`. |
| [`oihana/php-reflect`](https://github.com/BcommeBois/oihana-php-reflect) | `ToStringTrait` | `ReflectionTrait` (short class name). |
| [`php-di/php-di`](https://packagist.org/packages/php-di/php-di) | `ContainerTrait`, `LazyTrait` | The `Container` type. |
| [`psr/container`](https://packagist.org/packages/psr/container) | init methods | PSR-11 `ContainerInterface` used to resolve init values. |

This package depends on **no** higher-level `oihana/*` library (it is a leaf above core/enums/reflect/exceptions), so it never pulls a platform such as `php-system`.

## Development dependencies

| Package | Role |
|---|---|
| `phpunit/phpunit` | Test runner (strict mode). |
| `nunomaduro/collision` | Readable CLI error output. |
| `phpdocumentor/shim` | API documentation generation. |

## Next steps

- [Container & config](../container-config.md)
- [Identifiers](../identifiers.md)
