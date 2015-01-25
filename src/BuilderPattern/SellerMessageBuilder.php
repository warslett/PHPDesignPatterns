<?php

namespace DesignPatterns\BuilderPattern;

class SellerMessageBuilder implements MessageBuilder
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
        $this->message->setSubject('Auction Ended');
    }

    /**
     *
     */
    public function setMessage()
    {
        $this->message->setMessage('Your Item has been sold please check your Bank Account and send the item to the winner');
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

}