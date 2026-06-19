# Container & config

Traits that bind a class to a DI container and to configuration data.

## `ContainerTrait`

Holds a PHP-DI `Container` reference in a public `$container` property — the minimal building block for classes that resolve services from a container.

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

Adds a `config` array and a `configPath` string, hydrated from an init array or resolved from the container.

| Member | Meaning |
|---|---|
| `array $config` | The configuration data. |
| `string $configPath` | Path to the configuration source. |
| `ConfigTrait::CONFIG` (`'config'`) / `CONFIG_PATH` (`'configPath'`) | Init keys. |
| `initializeConfig(array $init = [], ?ContainerInterface $container = null): static` | Set `$config` from the init array or container. |
| `initConfigPath(array $init = [], ?ContainerInterface $container = null): static` | Set `$configPath`. |

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

Reads and writes a key uniformly, whether the document is an **array** or an **object** — so you don't branch on the container type.

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

`$isArray` is auto-detected from the document when left `null`.

## Next steps

- [Identifiers](identifiers.md)
- [State](state.md)
