<?php

namespace Kubik\Sorter;

class SorterFromSmaller implements SorterStrategyInterface
{
    public function sort(array $array): array
    {
        \sort($array);

        return $array;
    }
}
