<?php

namespace DesignPatterns\FactoryPattern;

use DesignPatterns\FactoryPattern\AbstractUI\Factory;

/**
 * Class ServiceLocator
 * @package DesignPatterns\FactoryPattern
 */
class ServiceLocator {

    /**
     * @var Factory
     */
    private static $factory;

    /**
     * @param Factory $f
     */
    public static function setFactory(Factory $f)
    {
        self::$factory = $f;
    }

    /**
     * @return Factory
     */
    public static function getFactory()
    {
        return self::$factory;
    }

}