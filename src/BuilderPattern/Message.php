<?php

namespace DesignPatterns\BuilderPattern;

/**
 * Class Message
 */
class Message
{

    /**
     * @var string
     */
    private $toAddress;

    /**
     * @var string
     */
    private $fromAddress;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $message;

    /**
     * @param string $toAddress
     * @param string $fromAddress
     * @param string $recipientName
     * @param string $subject
     * @param string $message
     */
    public function __construct($toAddress='', $fromAddress='', $recipientName='', $subject='', $message='')
    {
        $this->toAddress = $toAddress;
        $this->fromAddress = $fromAddress;
        $this->recipientName = $recipientName;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getToAddress()
    {
        return $this->toAddress;
    }

    /**
     * @param string $toAddress
     */
    public function setToAddress($toAddress)
    {
        $this->toAddress = $toAddress;
    }

    /**
     * @return string
     */
    public function getFromAddress()
    {
        return $this->fromAddress;
    }

    /**
     * @param string $fromAddress
     */
    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        echo "To: " . $this->getToAddress() . "\n"
            . "From: " . $this->getFromAddress() . "\n"
            . "Subject: " . $this->getFromAddress() . "\n"
            . "Message: " . $this->getMessage() . "\n";
    }

}