<?php

namespace Kubik\Sorter;

interface SorterStrategyInterface
{
    public function sort(array $array): array ;
}
