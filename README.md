# Naija Pikin

A hopefully funny and non-annoying way to pick random names for unregistered users. Available at [stigwue/naija_pikin](https://github.com/stigwue/naija_pikin).

Basically, it combines an adjective pulled from [adjectivesthatstart.com](http://adjectivesxthatstart.com/) and a noun (a Nigerian name pulled from [faker.ng](https://github.com/binkabir/faker.ng)).

I have not gone thorugh the adjectives to remove insultive ones!

## Usage

Here is a simple example.

```php
$np = new NaijaPikin('path_to_to/naija_pikin/dictionary.json');

$name = $np->getName();

echo $name;
```

## Functions

### getNoun

**getNoun** takes two optional parameters: _randomize_, a boolean parameter (default value **true**) and _noun_, a string parameter (default value **Igwue**).

If _randomize_ is **true**, a random noun is selected from the supplied dictionary. If **false**, the supplied _noun_ parameter is returned (if no previous noun has been 'got') or the previous gotten noun is returned.

### getAdjective

**getAdjective** takes two optional parameters: _randomize_, a boolean parameter (default value **true**) and _adjective_, a string parameter (default value **Irresistible**).

If _randomize_ is **true**, a random adjective with the same starting letter as the noun (see **getNoun**) is selected from the supplied dictionary. If **false**, the supplied _adjective_ parameter is returned (if no previous adjective has been 'got') or the previous gotten adjective is returned.

### getName

**getName** takes a single optional parameter: _randomize_, a boolean parameter (default value **true**).

It combines an adjective with a noun to produce a _name_.

If _randomize_ is **true**, a random name is generated. If **false**, the default, _Irresistible Igwue_ is returned (if no _name_ has been 'got') or the previous gotten name.

## To Do

* Remove insultive adjectives or put in a flag to use or exclude insultive adjective.
* Add more usage for this utility besides generated names, anonymyzing log files.
