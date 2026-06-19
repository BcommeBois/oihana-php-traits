# Identifiants

Traits qui donnent une identité à une classe.

## `IDTrait`

Une propriété `id` nullable (`int`, `string` ou `null`) avec un initialiseur.

| Membre | Signification |
|---|---|
| `null\|int\|string $id` | L'identifiant. |
| `IDTrait::ID` (`'id'`) | Clé du tableau d'init. |
| `initializeID(array $init = [], ?ContainerInterface $container = null): static` | Définit `$id` depuis l'init ou le conteneur. |

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

Un identifiant de requête — utile pour nommer ou mettre en cache une requête.

| Membre | Signification |
|---|---|
| `QueryIDTrait::QUERY` (`'query'`) / `QUERY_ID` (`'queryId'`) | Clés d'init. |
| `getQueryID(): string` | L'identifiant de requête résolu. |
| `initializeQueryID(string\|array\|null $init): static` | Le définit depuis une chaîne ou un tableau d'init. |

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

## Étapes suivantes

- [État](state.md)
- [Chaînes & URI](strings-uri.md)
