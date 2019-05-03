<?php



namespace kubik\Sorter;

class SorterFromLarge implements SorterInterface
{
    public function sort(array $array): array
    {
        \rsort($array);

        return $array;
    }
}
