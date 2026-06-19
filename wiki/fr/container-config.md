# Conteneur & config

Traits qui relient une classe à un conteneur DI et à des données de configuration.

## `ContainerTrait`

Détient une référence vers un `Container` PHP-DI dans une propriété publique `$container` — la brique minimale pour les classes qui résolvent des services depuis un conteneur.

```php
use DI\Container;
use oihana\traits\ContainerTrait;

class Service
{
    use ContainerTrait;

    public function __construct( Container $container )
    {
        $this->container = $container;
    }
}
```

## `ConfigTrait`

Ajoute un tableau `config` et une chaîne `configPath`, hydratés depuis un tableau d'init ou résolus depuis le conteneur.

| Membre | Signification |
|---|---|
| `array $config` | Les données de configuration. |
| `string $configPath` | Chemin vers la source de configuration. |
| `ConfigTrait::CONFIG` (`'config'`) / `CONFIG_PATH` (`'configPath'`) | Clés d'init. |
| `initializeConfig(array $init = [], ?ContainerInterface $container = null): static` | Définit `$config` depuis l'init ou le conteneur. |
| `initConfigPath(array $init = [], ?ContainerInterface $container = null): static` | Définit `$configPath`. |

```php
use oihana\traits\ConfigTrait;

class App
{
    use ConfigTrait;

    public function __construct( array $init = [] )
    {
        $this->initializeConfig( $init );
    }
}

$app = new App([ 'config' => [ 'debug' => true ] ]);
$app->config['debug']; // true
```

## `KeyValueTrait`

Lit et écrit une clé de façon uniforme, que le document soit un **tableau** ou un **objet** — sans brancher sur le type.

```php
public function getKeyValue( array|object $document, string $key, ?bool $isArray = null ): mixed
public function setKeyValue( array|object $document, string $key, mixed $value, ?bool $isArray = null ): array|object
```

```php
use oihana\traits\KeyValueTrait;

class Accessor { use KeyValueTrait; }

$a = new Accessor();
$a->getKeyValue( [ 'name' => 'Alice' ], 'name' );        // 'Alice'
$a->getKeyValue( (object) [ 'name' => 'Bob' ], 'name' );  // 'Bob'
$doc = $a->setKeyValue( [], 'age', 30 );                  // [ 'age' => 30 ]
```

`$isArray` est auto-détecté depuis le document quand il vaut `null`.

## Étapes suivantes

- [Identifiants](identifiers.md)
- [État](state.md)
