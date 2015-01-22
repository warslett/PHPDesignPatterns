<?php

namespace DesignPatterns\AdapterPattern;


/**
 * Class DateB
 * @package DesignPatterns\AdapterPattern
 */
class DateB {

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @param $daysAgo
     */
    public function __construct($daysAgo){
        $this->timestamp = time()-$daysAgo*24*60*60;
    }

    /**
     * @return string
     */
    public function getMySQLDate()
    {
        return date('Y-m-d', $this->timestamp);
    }

    /**
     * @return string
     */
    public function getReadableDate()
    {
        return date('l jS \of F Y', $this->timestamp);
    }

} 