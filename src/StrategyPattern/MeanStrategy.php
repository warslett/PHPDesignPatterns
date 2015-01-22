<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 22/01/15
 * Time: 09:22
 */

namespace DesignPatterns\StrategyPattern;


class MeanStrategy implements AverageStrategy {

    /**
     * @param Person[] $array
     * @return float
     */
    public function averageWeight($array)
    {
        $total = 0;
        foreach($array as $item) {
            $total += $item->getWeight();
        }
        return $total/count($array);
    }

    /**
     * @param Person[] $array
     * @return mixed
     */
    public function averageHeight($array)
    {
        $total = 0;
        foreach($array as $item) {
            $total += $item->getHeight();
        }
        return $total/count($array);
    }
}