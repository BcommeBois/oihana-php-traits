# Introduction

`oihana/php-traits` gathers the small, reusable object traits that used to live inside `oihana/php-system`, extracted into a focused, dependency-light package. It sits low in the `oihana/*` stack (just above `php-core`, `php-enums`, `php-reflect` and `php-exceptions`) so that higher libraries — `php-logging`, `php-models`, … — can reuse these traits without pulling a heavy platform.

## The traits at a glance

| Trait | Role |
|---|---|
| `ContainerTrait` | Holds a PHP-DI `Container` reference (`$container`). |
| `ConfigTrait` | A `config` array + `configPath`, hydrated from an init array or a container. |
| `KeyValueTrait` | Read/write a key in an array **or** object uniformly. |
| `IDTrait` | A nullable `id` property with `initializeID()`. |
| `QueryIDTrait` | A query identifier (`getQueryID()` / `initializeQueryID()`). |
| `LazyTrait` | A `lazy` flag resolved from init/container (`isLazy()`). |
| `LockableTrait` | A `lockable` flag (`initLockable()`). |
| `SortDefaultTrait` | A default sort expression (`initializeSortDefault()`). |
| `JsonOptionsTrait` | JSON encode/decode option flags (`initializeJsonOptions()`). |
| `ToStringTrait` | A reflection-based `__toString()` (short class name). |
| `UriTrait` | `buildUri()` — merge query/fragment params into a URI. |
| `UnsupportedTrait` | `unsupported()` — throw for not-implemented operations. |
| `strings\ExpressionTrait` | A string-expression builder (`betweenBraces`, `func`, `predicate`, …). |

## The *oihana* philosophy

- **PHP 8.4+ only** — typed constants and properties, no legacy shims.
- **No *magic strings*** — each init key is a typed constant (`IDTrait::ID`, `ConfigTrait::CONFIG`, …).
- **Single responsibility, composable** — mix only the traits you need.
- **Tested** — 100% line coverage, strict PHPUnit mode.

## Next steps

- [Installation](installation.md)
- [Dependencies](dependencies.md)
- [Container & config](../container-config.md)
