<?php

namespace DesignPatterns\BuilderPattern;

/**
 * Interface MessageBuilder
 */
interface MessageBuilder {

    /**
     * @param $toAddress
     */
    public function __construct($toAddress);

    /**
     *
     */
    public function setFromAddress();

    /**
     *
     */
    public function setSubject();

    /**
     *
     */
    public function setMessage();

    /**
     * @return Message
     */
    public function getMessage();

}