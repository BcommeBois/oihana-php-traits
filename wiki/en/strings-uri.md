# Strings & URI

Helpers for string representations, URI building and string-expression construction.

## `ToStringTrait`

A reflection-based `__toString()` that returns the object's **short class name** (without namespace).

```php
use oihana\traits\ToStringTrait;

class UserModel { use ToStringTrait; }

echo (string) new UserModel(); // 'UserModel'
```

## `UnsupportedTrait`

Provides `unsupported()` to throw an `UnsupportedOperationException` from methods you intentionally leave unimplemented (abstract bases, partial stubs).

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

`buildUri()` merges query and fragment parameters into a base URI.

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

An invalid URI throws.

## `strings\ExpressionTrait`

A composable string-expression builder — handy to assemble query fragments, function calls and predicates without string concatenation. Highlights:

| Method | Builds |
|---|---|
| `betweenBraces($expr)` | `{ expr }` |
| `betweenBrackets($expr)` | `[ expr ]` |
| `betweenParentheses($expr)` | `( expr )` |
| `betweenQuotes($expr)` / `betweenDoubleQuotes($expr)` | `'expr'` / `"expr"` |
| `func($name, $args)` | `name(arg1, arg2)` |
| `key($key, $prefix)` | a prefixed key |
| `keyValue($key, $value)` | `key: value` |
| `object($keyValues)` | an object literal |
| `predicate($left, $op, $right)` | `left op right` |
| `predicates($conditions, $logicalOp, $useParentheses)` | combined predicates |
| `compile($expressions, $separator)` | join expressions |
| `clean($array)` | drop empty parts |

```php
use oihana\traits\strings\ExpressionTrait;

class Query { use ExpressionTrait; }

$q = new Query();
$q->func( 'COUNT', [ '*' ] );                 // COUNT(*)
$q->predicate( 'age', '>=', 18 );             // age >= 18
$q->betweenParentheses( 'a OR b' );           // ( a OR b )
```

## Next steps

- [Container & config](container-config.md)
- [Tests & coverage](testing.md)
