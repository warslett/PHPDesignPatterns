<?php

namespace DesignPatterns\StrategyPattern;

/**
 * Interface AverageStrategy
 * @package DesignPatterns\StrategyPattern
 */
interface AverageStrategy {

    /**
     * @param Person[] $array
     * @return float
     */
    public function averageWeight($array);

    /**
     * @param Person[] $array
     * @return mixed
     */
    public function averageHeight($array);

} 