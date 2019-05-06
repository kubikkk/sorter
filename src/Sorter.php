<?php

namespace Kubik\Sorter;

class Sorter
{
    private $strategy;

    public function __construct(SorterStrategyInterface $strategy)
    {
        $this->strategy=$strategy;
    }


    public function setStrategy(SorterStrategyInterface $strategy):void
    {
        $this->strategy=$strategy;
    }

    public function sort(array $array): array
    {
        return $this->strategy->sort($array);
    }
}
