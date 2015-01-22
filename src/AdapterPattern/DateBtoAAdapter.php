<?php

namespace DesignPatterns\AdapterPattern;

/**
 * Class DateBtoAAdapter
 * @package DesignPatterns\AdapterPattern
 */
class DateBtoAAdapter extends DateA {

    /**
     * @var DateB
     */
    private $adaptee;

    /**
     * @param DateB $adaptee
     */
    public function __construct(DateB $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function getDay()
    {
        $timestamp = strtotime($this->adaptee->getMySQLDate());
        return (int)date('d', $timestamp);
    }

    public function getMonth()
    {
        $timestamp = strtotime($this->adaptee->getMySQLDate());
        return (int)date('m', $timestamp);
    }

    public function getYear()
    {
        $timestamp = strtotime($this->adaptee->getMySQLDate());
        return (int)date('Y', $timestamp);
    }

} 