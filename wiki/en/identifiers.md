# Identifiers

Traits that give a class an identity.

## `IDTrait`

A nullable `id` property (`int`, `string` or `null`) with an initializer.

| Member | Meaning |
|---|---|
| `null\|int\|string $id` | The identifier. |
| `IDTrait::ID` (`'id'`) | Init-array key. |
| `initializeID(array $init = [], ?ContainerInterface $container = null): static` | Set `$id` from the init array or container. |

```php
use oihana\traits\IDTrait;

class Entity
{
    use IDTrait;

    public function __construct( array $init = [] )
    {
        $this->initializeID( $init );
    }
}

$e = new Entity([ 'id' => 'abc-123' ]);
echo $e->id; // 'abc-123'
```

## `QueryIDTrait`

A query identifier — useful to name or cache a query.

| Member | Meaning |
|---|---|
| `QueryIDTrait::QUERY` (`'query'`) / `QUERY_ID` (`'queryId'`) | Init keys. |
| `getQueryID(): string` | The resolved query identifier. |
| `initializeQueryID(string\|array\|null $init): static` | Set it from a string or an init array. |

```php
use oihana\traits\QueryIDTrait;

class Finder
{
    use QueryIDTrait;

    public function __construct( array $options = [] )
    {
        $this->initializeQueryID( $options );
    }
}

$f = new Finder([ 'queryId' => 'users.active' ]);
echo $f->getQueryID(); // 'users.active'
```

## Next steps

- [State](state.md)
- [Strings & URI](strings-uri.md)
