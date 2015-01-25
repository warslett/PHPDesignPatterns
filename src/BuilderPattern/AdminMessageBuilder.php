<?php

namespace DesignPatterns\BuilderPattern;

class AdminMessageBuilder implements MessageBuilder
{

    private $message;

    /**
     * @param $toAddress
     */
    public function __construct($toAddress)
    {
        $this->message = new Message();
        $this->message->setToAddress($toAddress);
    }

    /**
     *
     */
    public function setFromAddress()
    {
        $this->message->setFromAddress('no-reply@system.com');
    }

    /**
     *
     */
    public function setSubject()
    {
        $this->message->setSubject('Your Item has been sold');
    }

    /**
     *
     */
    public function setMessage()
    {
        $this->message->setMessage('An Auction has ended');
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

}