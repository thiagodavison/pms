<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms\Message;

use Umbrella\Pms\Api\ICompletionListener;
use Umbrella\Pms\Api\IMessageQueue;
use Umbrella\Pms\Api\Message\IMessageProducer;
use Umbrella\Pms\Delivery\IPersister;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class MessageProducer implements IMessageProducer
{

    public function send(IMessageQueue $queue, IPersister $deliveryMode = null, ICompletionListener $completionListener = null)
    {
        if ($deliveryMode === null) {
            $deliveryMode = new InMemoryDeliver();
        }

        $deliveryMode->send($queue, $completionListener);
    }

}
