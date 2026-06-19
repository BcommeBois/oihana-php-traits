# Chaînes & URI

Helpers pour les représentations de chaînes, la construction d'URI et l'assemblage d'expressions de chaînes.

## `ToStringTrait`

Un `__toString()` basé sur la réflexion qui retourne le **nom court de classe** de l'objet (sans l'espace de noms).

```php
use oihana\traits\ToStringTrait;

class UserModel { use ToStringTrait; }

echo (string) new UserModel(); // 'UserModel'
```

## `UnsupportedTrait`

Fournit `unsupported()` pour lever une `UnsupportedOperationException` depuis les méthodes laissées volontairement non implémentées (bases abstraites, stubs partiels).

```php
protected function unsupported( string $method = '' ): void
```

```php
use oihana\traits\UnsupportedTrait;

class ReadOnlyRepository
{
    use UnsupportedTrait;

    public function save( $item )
    {
        $this->unsupported( __METHOD__ );
    }
}
```

## `UriTrait`

`buildUri()` fusionne les paramètres de query et de fragment dans une URI de base.

```php
public function buildUri( string $uri, array $options = [] ): string
```

```php
use oihana\traits\UriTrait;

class Client { use UriTrait; }

( new Client() )->buildUri( 'https://api.example.com/users', [
    'query' => [ 'page' => 2 ],
] );
// https://api.example.com/users?page=2
```

Une URI invalide lève une exception.

## `strings\ExpressionTrait`

Un constructeur d'expressions de chaînes composable — pratique pour assembler des fragments de requête, des appels de fonction et des prédicats sans concaténation. Principaux helpers :

| Méthode | Construit |
|---|---|
| `betweenBraces($expr)` | `{ expr }` |
| `betweenBrackets($expr)` | `[ expr ]` |
| `betweenParentheses($expr)` | `( expr )` |
| `betweenQuotes($expr)` / `betweenDoubleQuotes($expr)` | `'expr'` / `"expr"` |
| `func($name, $args)` | `name(arg1, arg2)` |
| `key($key, $prefix)` | une clé préfixée |
| `keyValue($key, $value)` | `key: value` |
| `object($keyValues)` | un littéral objet |
| `predicate($left, $op, $right)` | `left op right` |
| `predicates($conditions, $logicalOp, $useParentheses)` | prédicats combinés |
| `compile($expressions, $separator)` | joint des expressions |
| `clean($array)` | retire les parties vides |

```php
use oihana\traits\strings\ExpressionTrait;

class Query { use ExpressionTrait; }

$q = new Query();
$q->func( 'COUNT', [ '*' ] );                 // COUNT(*)
$q->predicate( 'age', '>=', 18 );             // age >= 18
$q->betweenParentheses( 'a OR b' );           // ( a OR b )
```

## Étapes suivantes

- [Conteneur & config](container-config.md)
- [Tests & couverture](testing.md)
