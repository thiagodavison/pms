<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    protected $acknowledge;
    protected $body;
    protected $destination;
    protected $redelivered;

    public function getAcknowledge()
    {
        return $this->acknowledge;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getRedelivered()
    {
        return $this->redelivered;
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

    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    public function setRedelivered($redelivered)
    {
        $this->redelivered = $redelivered;
        return $this;
    }

}
