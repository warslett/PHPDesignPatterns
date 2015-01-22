<?php

namespace DesignPatterns\StrategyPattern;

/**
 * Class Context
 * @package DesignPatterns\StrategyPattern
 */
class Context
{

    /**
     * @var AverageStrategy
     */
    private $averageStrategy;

    /**
     * @return AverageStrategy
     */
    public function getAverageStrategy()
    {
        return $this->averageStrategy;
    }

    /**
     * @param AverageStrategy $averageStrategy
     */
    public function __construct(AverageStrategy $averageStrategy)
    {
        $this->averageStrategy = $averageStrategy;
    }

    /**
     *
     */
    public function run()
    {
        $people = $this->getPersonArray();
        print("\n");
        print("Average Height: ");
        print($this->getAverageStrategy()->averageHeight($people));
        print("\n");
        print("Average Weight: ");
        print($this->getAverageStrategy()->averageWeight($people));
        print("\n\n");
    }

    /**
     * @return Person[]
     */
    public function getPersonArray()
    {
        return [
            new Person(62.5, 183.5),
            new Person(54.2, 154.3),
            new Person(78.5, 192.6),
            new Person(65.4, 134.5),
            new Person(82.2, 190.0),
            new Person(50.2, 143.9)
        ];
    }

} 