<?php

namespace kubik\Sorter;

class SorterFromSmaller implements SorterInterface
{
    public function sort(array $array): array
    {
        \sort($array);

        return $array;
    }
}
