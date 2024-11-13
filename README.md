# Php Redefinitions

This package provides a set of redefinitions of native php functions so that they can be mocked in unit tests.

## Installation

Run

```sh
composer require michaelcozzolino/php-redefinitions
```

## Usage

Every redefinition is included in a specific class whose name is `{category}Redefinition` where the `category` is
the name specified in the title where the related functions are documented in php. E.G:

if we go to https://www.php.net/manual/en/ref.json.php, we see `JSON Functions`, so this means that the redefinitions of
these functions will be in a class called `JsonRedefinition`, to notice the PascalCase even if the word JSON is
uppercase. So you can find the needed class and inject it in your application.

