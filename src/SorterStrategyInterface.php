<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubik\Sorter;

interface SorterStrategyInterface
{
    public function sort(array $array): array ;
}
