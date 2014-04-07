<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Serializable;
use Umbrella\Pms\Api\IDestination;
use Umbrella\Pms\Api\IMessageListener;
use Umbrella\Pms\Api\IQueue;
use Umbrella\Pms\Api\ISession;
use Umbrella\Pms\Api\ITopic;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class Session implements ISession
{

    public function createConsumer(Api\IDestination $destination, $messageSelector = null, $noLocal = true)
    {
        return new MessageConsumer();
    }

    public function createDurableConsumer(Api\ITopic $topic, $name, $messageSelector = null, $noLocal = true)
    {
        
    }

    public function createDurableSubscriber(Api\ITopic $topic, $name, $messageSelector = null, $noLocal = true)
    {
        
    }

    public function createMessage()
    {
        
    }

    public function createObjectMessage(Serializable $object = null)
    {
        
    }

    public function createProducer(Api\IDestination $destination)
    {
        return new MessageProducer($destination);
    }

    public function createQueue()
    {
        
    }

    public function createTextMessage($text = null)
    {
        
    }

    public function createTopic($topicName)
    {
        
    }

    public function getAcknowledgeMode()
    {
        
    }

    public function getMessageListener()
    {
        
    }

    public function setMessageListener(Api\IMessageListener $listener)
    {
        
    }

    public function unsubscribe($name)
    {
        
    }

}
