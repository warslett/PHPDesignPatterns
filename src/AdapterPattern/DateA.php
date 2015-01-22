<?php

namespace DesignPatterns\AdapterPattern;


/**
 * Class DateA
 * @package DesignPatterns\AdapterPattern
 */
class DateA
{
    /**
     * @var int
     */
    private $timestamp;

    /**
     * @param int $timeStamp
     */
    public function __construct($timeStamp)
    {
        $this->timestamp = $timeStamp;
    }

    public function getDay()
    {
        return (int) date('d', $this->timestamp);
    }

    public function getMonth()
    {
        return (int) date('m', $this->timestamp);
    }

    public function getYear()
    {
        return (int) date('Y', $this->timestamp);
    }

} 