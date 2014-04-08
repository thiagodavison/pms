<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms\Delivery;

use Doctrine\ORM\EntityManager;
use Umbrella\Pms\Api\IAcknowledge;
use Umbrella\Pms\Api\IMessageListener;
use Umbrella\Pms\Api\IMessageQueue;
use Umbrella\Pms\MessageQueue;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class InMemoryPersister implements IPersister
{

    public function complete(IMessage $message)
    {
        
    }

    public function get($id)
    {
        return msg_get_queue($id);
    }

    public function save(IMessage $message)
    {
        $queue = msg_get_queue($key);
        msg_send($queue, $msgtype, $message);
    }

}
