Sorting Library
===============
This is a PHP Sorting Library can sorts array objects from large to small and from small to large.

Installation
------------




```
$ composer require kubik/sorter
```
Usage
-----
Sorting from smaller
```php
$sorter = new Sorter(new SorterFromSmaller());
print_r($sorter->sort($array));
```
Sorting from large
```php
$sorter = new Sorter(new SorterFromLarge());
print_r($sorter->sort($array));
```
Switch startegy sorting
```php
$sorter = new Sorter(new SorterFromSmaller());
print_r($sorter->sort($array));
$sorter->setStrategy(new SorterFromLarge());
print_r($sorter->sort($array));
```




License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Anton Kubrak