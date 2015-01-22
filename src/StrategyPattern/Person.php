<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 22/01/15
 * Time: 09:06
 */

namespace DesignPatterns\StrategyPattern;


/**
 * Class Person
 * @package DesignPatterns\StrategyPattern
 */
class Person
{

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $height;

    /**
     * @param float $weight
     * @param float $height
     */
    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }



}