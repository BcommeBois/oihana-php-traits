# Introduction

`oihana/php-traits` rassemble les petits traits d'objets réutilisables qui vivaient dans `oihana/php-system`, extraits dans un paquet ciblé et léger. Il se place bas dans la pile `oihana/*` (juste au-dessus de `php-core`, `php-enums`, `php-reflect` et `php-exceptions`), afin que les bibliothèques supérieures — `php-logging`, `php-models`… — réutilisent ces traits sans tirer une plateforme lourde.

## Les traits en un coup d'œil

| Trait | Rôle |
|---|---|
| `ContainerTrait` | Détient une référence vers un `Container` PHP-DI (`$container`). |
| `ConfigTrait` | Un tableau `config` + `configPath`, hydratés depuis un tableau d'init ou un conteneur. |
| `KeyValueTrait` | Lit/écrit une clé dans un tableau **ou** un objet de façon uniforme. |
| `IDTrait` | Une propriété `id` nullable avec `initializeID()`. |
| `QueryIDTrait` | Un identifiant de requête (`getQueryID()` / `initializeQueryID()`). |
| `LazyTrait` | Un drapeau `lazy` résolu depuis init/conteneur (`isLazy()`). |
| `LockableTrait` | Un drapeau `lockable` (`initLockable()`). |
| `SortDefaultTrait` | Une expression de tri par défaut (`initializeSortDefault()`). |
| `JsonOptionsTrait` | Drapeaux d'options JSON encode/decode (`initializeJsonOptions()`). |
| `ToStringTrait` | Un `__toString()` basé sur la réflexion (nom court de classe). |
| `UriTrait` | `buildUri()` — fusionne paramètres query/fragment dans une URI. |
| `UnsupportedTrait` | `unsupported()` — lève pour les opérations non implémentées. |
| `strings\ExpressionTrait` | Un constructeur d'expressions de chaînes (`betweenBraces`, `func`, `predicate`…). |

## La philosophie *oihana*

- **PHP 8.4+ uniquement** — constantes et propriétés typées, aucun palliatif hérité.
- **Pas de *magic strings*** — chaque clé d'init est une constante typée (`IDTrait::ID`, `ConfigTrait::CONFIG`…).
- **Responsabilité unique, composable** — ne mêlez que les traits dont vous avez besoin.
- **Testé** — 100 % de couverture de lignes, mode strict PHPUnit.

## Étapes suivantes

- [Installation](installation.md)
- [Dépendances](dependencies.md)
- [Conteneur & config](../container-config.md)
