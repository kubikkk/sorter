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
$sorter=new SortStrategy(new SorterFromSmaller());
print_r($sorter->sort($array));
```
Sorting from large
```
$sorter=new SortStrategy(new SorterFromLarge());
print_r($sorter->sort($array));
```
Switch startegy sorting
```
$sorter=new SortStrategy(new SorterFromSmaller());
print_r($sorter->sort($array));
$sorter->setStrategy(new SorterFromLarge());
print_r($sorter->sort($array));
```




License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Anton Kubrak