A PHP SubString manipulation library with multibyte support that extends Stringy. Offers both OO method
chaining and a procedural-style static wrapper. Tested and compatible with PHP 5.3+ and HHVM.

This library extends and adds SubString functionality to `danielstjules/Stringy` you should check it's [documentation](https://github.com/danielstjules/Stringy/blob/master/README.md) for methods inherited by SubStringy.

[![Build Status](https://api.travis-ci.org/tcb13/SubStringy.svg?branch=master)](https://travis-ci.org/tcb13/SubStringy)

* [Requiring/Loading](#requiringloading)
* [OO and Procedural](#oo-and-procedural)
* [Implemented Interfaces](#implemented-interfaces)
* [PHP 5.6 Creation](#php-56-creation)
* [Methods](#methods)
    * [substringAfterFirst](#substringafterfirst)
    * [substringAfterLast](#substringafterlast)
    * [substringBeforeFirst](#substringbeforefirst)
    * [substringBeforeLast](#substringbeforelast)
* [Links](#links)
* [Tests](#tests)
* [License](#license)

## Requiring/Loading

If you're using Composer to manage dependencies, you can include the following
in your composer.json file:

```json
{
	"repositories":
	[
	    {
	        "type": "vcs",
	        "url": "https://github.com/tcb13/SubStringy/"
	    }
	],
    "require": {
        "tcb13/SubStringy": "dev-master"
    }
}
```

Then, after running `composer update` or `php composer.phar update`, you can
load the class using Composer's autoloading:

```php
require 'vendor/autoload.php';
```

Otherwise, you can simply require the file directly:

```php
require_once 'path/to/SubStringy/src/SubStringy.php';
// or
require_once 'path/to/SubStringy/src/StaticSubStringy.php';
```

And in either case, I'd suggest using an alias.

```php
use SubStringy\SubStringy as S;
// or
use SubStringy\StaticSubStringy as S;
```

## OO and Procedural

The library offers both OO method chaining with `SubStringy\SubStringy`, as well as
procedural-style static method calls with `SubStringy\StaticSubStringy`. An example
of the former is the following:

```php
use Stringy\Stringy as S;
echo S::create('Fòô     Bàř', 'UTF-8')->collapseWhitespace()->swapCase();  // 'fÒÔ bÀŘ'
```

`Stringy\Stringy` has a __toString() method, which returns the current string
when the object is used in a string context, ie:
`(string) S::create('foo')  // 'foo'`

Using the static wrapper, an alternative is the following:

```php
use Stringy\StaticStringy as S;
$string = S::collapseWhitespace('Fòô     Bàř', 'UTF-8');
echo S::swapCase($string, 'UTF-8');  // 'fÒÔ bÀŘ'
```

## Implemented Interfaces

`SubStringy\SubStringy` implements the `IteratorAggregate` interface, meaning that
`foreach` can be used with an instance of the class:

``` php
$stringy = S::create('Fòô Bàř', 'UTF-8');
foreach ($stringy as $char) {
    echo $char;
}
// 'Fòô Bàř'
```

It implements the `Countable` interface, enabling the use of `count()` to
retrieve the number of characters in the string:

``` php
$stringy = S::create('Fòô', 'UTF-8');
count($stringy);  // 3
```

Furthermore, the `ArrayAccess` interface has been implemented. As a result,
`isset()` can be used to check if a character at a specific index exists. And
since `Stringy\Stringy` is immutable, any call to `offsetSet` or `offsetUnset`
will throw an exception. `offsetGet` has been implemented, however, and accepts
both positive and negative indexes. Invalid indexes result in an
`OutOfBoundsException`.

``` php
$stringy = S::create('Bàř', 'UTF-8');
echo $stringy[2];     // 'ř'
echo $stringy[-2];    // 'à'
isset($stringy[-4]);  // false

$stringy[3];          // OutOfBoundsException
$stringy[2] = 'a';    // Exception
```

## PHP 5.6 Creation

As of PHP 5.6, [`use function`](https://wiki.php.net/rfc/use_function) is
available for importing functions. SubStringy exposes a namespaced function,
`SubStringy\create`, which emits the same behaviour as `SubStringy\SubStringy::create()`.
If running PHP 5.6, or another runtime that supports the `use function` syntax,
you can take advantage of an even simpler API as seen below:

``` php
use function SubStringy\create as s;

// Instead of: S::create('Fòô     Bàř', 'UTF-8')
s('Fòô     Bàř', 'UTF-8')->collapseWhitespace()->swapCase();
```

## Methods

In the list below, any static method other than S::create refers to a method in
`SubStringy\StaticSubStringy`. For all others, they're found in `SubStringy\SubStringy`.
Furthermore, all methods that return a SubStringy object or string do not modify
the original. SubStringy objects are immutable.

Since this library extends and adds SubString functionality to `danielstjules/Stringy` you should check it's documentation (https://github.com/danielstjules/Stringy/blob/master/README.md) for methods that can also be transparently used when working with SubStringy.

*Note: If `$encoding` is not given, it defaults to `mb_internal_encoding()`.*

#### substringAfterFirst

$stringy->substringAfterFirst(string $separator)

S::substringAfterFirst(string $str, string $separator [, string $encoding ])

Gets the substring after the first occurrence of a separator. If no match is found returns false.

```php
S::create('What are your plans today?')->substringAfterFirst('plans ');
S::substringAfterFirst('What are your plans today?', 'plans ');  // 'today?'
```

#### substringAfterLast

$stringy->substringAfterLast(string $separator)

S::substringAfterLast(string $str, string $separator [, string $encoding ])

Gets the substring after the last occurrence of a separator. If no match is found returns false.

```php
S::create('This is a String. How cool can a String be after all?')->substringAfterLast('String ');
S::substringAfterLast('This is a String. How cool can a String be after all?', 'String ');  // 'be after all?'
```

#### substringBeforeFirst

$stringy->substringBeforeFirst(string $separator)

S::substringBeforeFirst(string $str, string $separator [, string $encoding ])

Gets the substring before the first occurrence of a separator. If no match is found returns false.

```php
S::create('What are your plans today?')->substringBeforeFirst(' plans');
S::substringBeforeFirst('What are your plans today?', ' plans');  // 'What are your'
```

#### substringBeforeLast

$stringy->substringBeforeLast(string $separator)

S::substringBeforeLast(string $str, string $separator [, string $encoding ])

Gets the substring before the last occurrence of a separator. If no match is found returns false.

```php
S::create('What are your plans today? Any plans for tomorrow?')->substringBeforeLast(' plans');
S::substringBeforeLast('What are your plans today? Any plans for tomorrow?', ' plans');  // What are your plans today? Any'
```

## Links

The following is a list of libraries that extend Stringy:

 * [SliceableStringy](https://github.com/danielstjules/SliceableStringy):
Python-like string slices in PHP

## Tests

From the project directory, tests can be ran using `phpunit`

## License

Released under the MIT License - see `LICENSE.txt` for details.
