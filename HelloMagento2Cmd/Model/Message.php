<?php
namespace Mage2\HelloMagento2Cmd\Model;

class Message
{
    /**
     * @var MessageInterface
     */
    protected $message;

    /**
     * Message constructor.
     * @param MessageInterface $message
     */
    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    /**
     * get hello message
     *
     * @return $this
     */
    public function getHelloMessage()
    {
        return $this->message->getHelloMessage();
    }
}