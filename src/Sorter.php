<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubik\Sorter;

class Sorter
{
    private $strategy;

    public function __construct(SorterStrategyInterface $strategy)
    {
        $this->strategy=$strategy;
    }


    public function setStrategy(SorterStrategyInterface $strategy): void
    {
        $this->strategy=$strategy;
    }

    public function sort(array $array): array
    {
        return $this->strategy->sort($array);
    }
}
