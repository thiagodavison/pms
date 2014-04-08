<?php

namespace Umbrella\Pms\Message;

use Umbrella\Pms\Api\Message\IMessage;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="tb_messages")
 */
class Message implements IMessage
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    protected $topic;
    protected $acknowledge;
    protected $body;

    public function getId()
    {
        return $this->id;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getAcknowledge()
    {
        return $this->acknowledge;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
    }

    public function setAcknowledge($acknowledge)
    {
        $this->acknowledge = $acknowledge;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

}
