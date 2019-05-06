<?php

namespace Kubik\Sorter;


class NullObject implements SorterStrategyInterface
{
    public function sort(array $array):array
    {
        // This is Null Object
        return $array;
    }

}