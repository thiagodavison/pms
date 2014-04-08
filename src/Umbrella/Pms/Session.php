<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Serializable;
use Umbrella\Pms\Api\IDestination;
use Umbrella\Pms\Api\IQueue;
use Umbrella\Pms\Api\ISession;
use Umbrella\Pms\Message\Message;
use Umbrella\Pms\Message\MessageConsumer;
use Umbrella\Pms\Message\MessageProducer;
use Umbrella\Pms\Message\ObjectMessage;
use Umbrella\Pms\Message\TextMessage;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class Session implements ISession
{

    public function createMessage()
    {
        return new Message();
    }

    public function createObjectMessage(Serializable $object = null)
    {
        $message = new ObjectMessage();
        return $message->setObject($object);
    }

    public function createTextMessage($text = null)
    {
        $message = new TextMessage();
        return $message->setText($text);
    }

    public function createConsumer($messageSelector = null)
    {
        return new MessageConsumer();
    }

    public function createProducer(IQueue $queue)
    {
        return new MessageProducer($queue);
    }

    public function createTopic($topicName)
    {
        return new Queue($topicName);
    }

}
