<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Umbrella\Pms\Api\ICompletionListener;
use Umbrella\Pms\Api\IDeliveryMode;
use Umbrella\Pms\Api\IDestination;
use Umbrella\Pms\Api\Message\IMessage;
use Umbrella\Pms\Api\Message\IMessageProducer;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class MessageProducer implements IMessageProducer
{

    protected $destination;
    protected $deliveryMode;
    protected $priority;
    protected $completionListener;

    public function __construct(IDestination $destination)
    {
        $this->destination = $destination;
    }

    public function send($delivery, $priority = IMessage::DEFAULT_PRIORITY, ICompletionListener $completionListener = null)
    {
        $this->deliveryMode = $deliveryMode;
        $this->priority = $priority;
        $this->completionListener = $completionListener;
    }

    public function getDeliveryMode()
    {
        
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getPriority()
    {
        
    }

    public function setDeliveryMode($deliveryMode)
    {
        return $this;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    public function setPriority($priority)
    {
        return $this;
    }

}
