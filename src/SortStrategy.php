<?php



namespace kubik\Sorter;

class SortStrategy
{
    private $strategy;

    public function __construct(SorterInterface $strategy)
    {
        $this->strategy=$strategy;
    }


    public function setStrategy(SorterInterface $strategy)
    {
        $this->strategy=$strategy;
    }

    public function sort(array $array): array
    {
        return $this->strategy->sort($array);
    }
}
