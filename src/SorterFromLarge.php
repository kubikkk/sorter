<?php

namespace Kubik\Sorter;

class SorterFromLarge implements SorterStrategyInterface
{
    public function sort(array $array): array
    {
        \rsort($array);

        return $array;
    }
}
