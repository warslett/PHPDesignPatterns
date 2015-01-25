<?php

namespace DesignPatterns\BuilderPattern;

class BuyerMessageBuilder implements MessageBuilder
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
        $this->message->setSubject('You won the auction!');
    }

    /**
     *
     */
    public function setMessage()
    {
        $this->message->setMessage('You won your auction, please check your post for the item and pay the seller');
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

}