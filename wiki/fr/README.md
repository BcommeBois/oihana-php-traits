# oihana/php-traits — traits d'objets réutilisables pour PHP

![Langue](https://img.shields.io/badge/langue-Fran%C3%A7ais-blue)

`oihana/php-traits` est une bibliothèque PHP 8.4+ regroupant de petits **traits composables à responsabilité unique** à mêler dans vos classes : accès au conteneur DI, identifiants, accès clé-valeur, configuration, état lazy/lockable, construction d'URI et helpers d'expressions de chaînes.

![Oihana PHP Traits](https://raw.githubusercontent.com/BcommeBois/oihana-php-traits/main/assets/images/oihana-php-traits-logo-inline-512x160.png)

## Démarrage rapide

```php
use DI\Container;
use oihana\traits\IDTrait;
use oihana\traits\ContainerTrait;

class Product
{
    use ContainerTrait;
    use IDTrait;

    public function __construct( array $init = [] )
    {
        $this->initializeID( $init );
    }
}

$p = new Product([ 'id' => 42 ]);
echo $p->id; // 42
```

## Table des matières

### Démarrage — [`getting-started/`](getting-started/)

- [Introduction](getting-started/introduction.md) — ce qu'est la bibliothèque et la philosophie *oihana*.
- [Installation](getting-started/installation.md) — PHP 8.4+ et `composer require`.
- [Dépendances](getting-started/dependencies.md) — les paquets `oihana/*` et vendor utilisés.

### Traits

- [Conteneur & config](container-config.md) — `ContainerTrait`, `ConfigTrait`, `KeyValueTrait`.
- [Identifiants](identifiers.md) — `IDTrait`, `QueryIDTrait`.
- [État](state.md) — `LazyTrait`, `LockableTrait`, `SortDefaultTrait`, `JsonOptionsTrait`, `DateTrait`.
- [Chaînes & URI](strings-uri.md) — `ToStringTrait`, `UriTrait`, `strings\ExpressionTrait`, `UnsupportedTrait`.

### Transversal

- [Tests & couverture](testing.md) — lancer la suite et mesurer la couverture.

## Code source

Le code se trouve sous [`src/oihana/traits/`](../../src/oihana/traits/) — espace de noms `oihana\traits`.

## Voir aussi

- [Packagist `oihana/php-traits`](https://packagist.org/packages/oihana/php-traits).
- [Référence API (phpDocumentor)](https://bcommebois.github.io/oihana-php-traits).
