# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.1.0] - 2026-06-19

First release. The `oihana\traits` namespace is extracted from
`oihana/php-system` into its own focused, dependency-light package of
reusable object traits.

### Added
- Project scaffolding: `composer.json`, `phpunit.xml`, `phpdoc.xml`,
  CI and Docs GitHub workflows, coverage tooling, phpDocumentor template,
  README, CONTRIBUTING and license.
- Brand assets (logos) under `assets/images/`.
- The `oihana\traits` library, imported unchanged from `oihana/php-system`
  (identical FQNs): `ConfigTrait`, `ContainerTrait`, `IDTrait`, `QueryIDTrait`,
  `KeyValueTrait`, `JsonOptionsTrait`, `LazyTrait`, `LockableTrait`,
  `SortDefaultTrait`, `ToStringTrait`, `UnsupportedTrait`, `UriTrait` and
  `strings\ExpressionTrait`.
