# Dépendances

`oihana/php-traits` garde une empreinte réduite et se place bas dans la pile `oihana/*`.

## Dépendances d'exécution

| Paquet | Utilisé par | Rôle |
|---|---|---|
| [`oihana/php-core`](https://github.com/BcommeBois/oihana-php-core) | `KeyValueTrait` | `oihana\core\arrays\isIndexed()` et autres helpers core. |
| [`oihana/php-enums`](https://github.com/BcommeBois/oihana-php-enums) | plusieurs | L'énumération `Char` (séparateurs, accolades, guillemets…). |
| [`oihana/php-exceptions`](https://github.com/BcommeBois/oihana-php-exceptions) | `UnsupportedTrait` | `UnsupportedOperationException`. |
| [`oihana/php-reflect`](https://github.com/BcommeBois/oihana-php-reflect) | `ToStringTrait` | `ReflectionTrait` (nom court de classe). |
| [`php-di/php-di`](https://packagist.org/packages/php-di/php-di) | `ContainerTrait`, `LazyTrait` | Le type `Container`. |
| [`psr/container`](https://packagist.org/packages/psr/container) | méthodes d'init | `ContainerInterface` PSR-11 pour résoudre les valeurs d'init. |

Ce paquet ne dépend d'**aucune** bibliothèque `oihana/*` de niveau supérieur (c'est une feuille au-dessus de core/enums/reflect/exceptions) : il ne tire jamais une plateforme comme `php-system`.

## Dépendances de développement

| Paquet | Rôle |
|---|---|
| `phpunit/phpunit` | Lanceur de tests (mode strict). |
| `nunomaduro/collision` | Sortie d'erreurs CLI lisible. |
| `phpdocumentor/shim` | Génération de la documentation API. |

## Étapes suivantes

- [Conteneur & config](../container-config.md)
- [Identifiants](../identifiers.md)
