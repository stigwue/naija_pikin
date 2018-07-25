# Naija Pikin

A funny and hopefully non-annoying way to pick random names for unregistered users or anonymize identities. Available at [stigwue/naija_pikin](https://github.com/stigwue/naija_pikin).

Basically, it combines an adjective pulled from [adjectivesthatstart.com](http://adjectivesxthatstart.com/) and a noun (a Nigerian name pulled from [faker.ng](https://github.com/binkabir/faker.ng)).

I have not gone thorugh the adjectives to remove insultive ones!

## Installation

Installation is via composer.

```
composer require stigwue/naija-pikin
```

## Usage

There are more examples in the example.php file but below is a simple one.

```php
$np = new NaijaPikin('path_to_to/naija_pikin/dictionary.json');

$name = $np->getName();

echo $name;
```

## Functions

### getNoun

**getNoun** takes two optional parameters: _randomize_, a boolean parameter (default value **true**) and _noun_, a string parameter (default value **Igwue**).

If _randomize_ is **true**, a random noun is selected from the supplied dictionary. If **false**, the supplied _noun_ parameter is returned.

### getAdjective

**getAdjective** takes three optional parameters: _randomize_, a boolean parameter (default value **true**), _letter_, a character parameter (default value **blank**) and _adjective_, a string parameter (default value **Irresistible**).

If _randomize_ is **true**, a random adjective with starting letter same as _letter_ is selected from the supplied dictionary. If **false**, the supplied _adjective_ parameter is returned.

### getName

**getName** takes a single optional parameter: _randomize_, a boolean parameter (default value **true**).

It combines an adjective with a noun.

If _randomize_ is **true**, a random name is generated. If **false**, the default, _Irresistible Igwue_ is returned.

## To Do

* Remove insultive adjectives or put in a flag to exclude them.
