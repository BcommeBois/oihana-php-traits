# État

Petits drapeaux et options résolus depuis un tableau d'init (ou un conteneur), chacun avec sa propre constante typée.

## `LazyTrait`

Un booléen `lazy`, résolu depuis le tableau d'init, une entrée de conteneur, ou la valeur par défaut de la propriété.

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

Clé d'init : `LazyTrait::LAZY` (`'lazy'`).

## `LockableTrait`

Un drapeau `lockable`, pour marquer une instance comme verrouillable.

```php
protected function initLockable( array $init = [] ): bool
```

Clé d'init : `LockableTrait::LOCKABLE` (`'lockable'`).

## `SortDefaultTrait`

Une expression de tri par défaut.

```php
public function initializeSortDefault( array $init = [], ?string $defaultValue = null ): static
```

Clé d'init : `SortDefaultTrait::SORT_DEFAULT` (`'sortDefault'`).

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

Drapeaux d'options JSON encode/decode, résolus depuis un tableau d'init.

```php
protected function initializeJsonOptions( array $init = [] ): static
```

Clé d'init : `JsonOptionsTrait::JSON_OPTIONS` (`'jsonOptions'`).

## `DateTrait`

Valeurs par défaut partagées pour les classes manipulant des dates : un format de date et un fuseau horaire, exposés comme de simples propriétés publiques adossées à des constantes typées (sans étape `initialize…()`).

```php
public const string DEFAULT_DATE_FORMAT = 'Y-m-d\TH:i:s'; // ISO-8601, sans offset
public const string DEFAULT_TIMEZONE    = 'Europe/Paris';
public const string NOW                 = 'now';

public string  $dateFormat = self::DEFAULT_DATE_FORMAT;
public ?string $timezone   = self::DEFAULT_TIMEZONE; // null = repli sur le défaut PHP
```

```php
use oihana\traits\DateTrait;

class Clock
{
    use DateTrait;
}

$clock = new Clock();
$clock->dateFormat;            // 'Y-m-d\TH:i:s'
$clock->timezone = 'UTC';     // surcharge par instance
```

## Étapes suivantes

- [Conteneur & config](container-config.md)
- [Chaînes & URI](strings-uri.md)
