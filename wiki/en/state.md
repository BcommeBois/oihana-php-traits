# State

Small flags and options resolved from an init array (or a container), each with its own typed constant.

## `LazyTrait`

A `lazy` boolean, resolved from the init array, a container entry, or the property default.

```php
public function initializeLazy( array $init = [], ?Container $container = null ): static
public function isLazy(): bool
```

```php
use oihana\traits\LazyTrait;

class Loader
{
    use LazyTrait;

    public function __construct( array $init = [] )
    {
        $this->initializeLazy( $init );
    }
}

( new Loader([ 'lazy' => true ]) )->isLazy(); // true
```

Init key: `LazyTrait::LAZY` (`'lazy'`).

## `LockableTrait`

A `lockable` flag, used to mark an instance as lockable.

```php
protected function initLockable( array $init = [] ): bool
```

Init key: `LockableTrait::LOCKABLE` (`'lockable'`).

## `SortDefaultTrait`

A default sort expression.

```php
public function initializeSortDefault( array $init = [], ?string $defaultValue = null ): static
```

Init key: `SortDefaultTrait::SORT_DEFAULT` (`'sortDefault'`).

```php
use oihana\traits\SortDefaultTrait;

class Repository
{
    use SortDefaultTrait;

    public function __construct( array $init = [] )
    {
        $this->initializeSortDefault( $init, 'createdAt DESC' );
    }
}
```

## `JsonOptionsTrait`

JSON encode/decode option flags, resolved from an init array.

```php
protected function initializeJsonOptions( array $init = [] ): static
```

Init key: `JsonOptionsTrait::JSON_OPTIONS` (`'jsonOptions'`).

## Next steps

- [Container & config](container-config.md)
- [Strings & URI](strings-uri.md)
