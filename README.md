# Oihana PHP - Traits

![Oihana PHP Traits](https://raw.githubusercontent.com/BcommeBois/oihana-php-traits/main/assets/images/oihana-php-traits-logo-inline-512x160.png)

Reusable, composable object traits for PHP 8.4+.

[![Latest Version](https://img.shields.io/packagist/v/oihana/php-traits.svg?style=flat-square)](https://packagist.org/packages/oihana/php-traits)  
[![Total Downloads](https://img.shields.io/packagist/dt/oihana/php-traits.svg?style=flat-square)](https://packagist.org/packages/oihana/php-traits)  
[![License](https://img.shields.io/packagist/l/oihana/php-traits.svg?style=flat-square)](LICENSE)

## 📚 Documentation

User guides (FR + EN), with narrative explanations and examples:

| 🇬🇧 **[English documentation](wiki/en/README.md)**                                                    | 🇫🇷 **[Documentation française](wiki/fr/README.md)**                                                 |
|----------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------|
| Getting started, container, identifiers, key-value, lazy/lockable, URI, strings, tips. | Démarrage, conteneur, identifiants, clé-valeur, lazy/lockable, URI, chaînes, astuces. |

Auto-generated API reference (phpDocumentor):  
👉 https://bcommebois.github.io/oihana-php-traits

## 🧠 New to traits?

A **trait** is a reusable block of methods and properties that you "mix into" a
class with the `use` keyword. It is a way to **share behaviour across classes
that don't share a common parent** — without copy-pasting and without
inheritance.

```php
trait GreetTrait
{
    public function hello(): string
    {
        return "Hi, I'm {$this->name}";
    }
}

class User
{
    use GreetTrait; // ← the class instantly gains the hello() method

    public function __construct( public string $name ) {}
}

echo ( new User('Ada') )->hello(); // Hi, I'm Ada
```

This package is a curated set of small, focused, tested traits: drop one into
your class with `use` and get container access, identifiers, lazy/lockable
state, key-value access, and more — for free.

## 🚀 Features

- 🧩 DI-container awareness — `ContainerTrait`.
- 💤 Lazy and 🔒 lockable state — `LazyTrait`, `LockableTrait`.
- 🆔 Identifiers — `IDTrait`, `QueryIDTrait`.
- 🗂️ Config and key-value access — `ConfigTrait`, `KeyValueTrait`, `JsonOptionsTrait`.
- 🔗 URI building, stringable and expression helpers — `UriTrait`, `ToStringTrait`, `strings\ExpressionTrait`.
- 🔢 Default sorting and unsupported-operation guards — `SortDefaultTrait`, `UnsupportedTrait`.
- 🗓️ Date format and timezone defaults — `DateTrait`.
- 🧪 Full unit-test coverage ensuring reliability and maintainability.

💡 Designed to be lightweight, testable, and compatible with any PHP 8.4+ project.

## 📦 Installation

> **Requires [PHP 8.4+](https://php.net/releases/)**  

Install via [Composer](https://getcomposer.org):
```bash
composer require oihana/php-traits
```

## ✅ Tests & coverage

Run the full unit-test suite (PHPUnit, strict mode):
```bash
composer test
```

Run a single test case:
```bash
./vendor/bin/phpunit --filter ContainerTraitTest
```

Measure coverage (requires Xdebug or PCOV):
```bash
composer coverage        # text + Clover + HTML under build/coverage/
composer coverage:md     # readable Markdown summary (build/coverage/COVERAGE.md)
```

The suite runs in **strict mode** and targets **100% line coverage**.

## 🧾 License

This project is licensed under the [Mozilla Public License 2.0 (MPL-2.0)](https://www.mozilla.org/en-US/MPL/2.0/).

## 👤 About the author

* Author : Marc ALCARAZ (aka eKameleon)
* Mail : marc@ooop.fr
* Website : http://www.ooop.fr

## 🛠️ Generate the Documentation

We use [phpDocumentor](https://phpdoc.org/) to generate the documentation into the ./docs folder.

### Usage
Run the command : 
```bash
composer doc
```

## 🔗 Related packages

- [oihana/php-core](https://github.com/BcommeBois/oihana-php-core) – core helpers and utilities used by this library.
- [oihana/php-enums](https://github.com/BcommeBois/oihana-php-enums) – a collection of strongly-typed constant enumerations for PHP.
- [oihana/php-reflect](https://github.com/BcommeBois/oihana-php-reflect) – reflection and hydration utilities.
