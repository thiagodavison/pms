<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Umbrella\Pms\Api\IMessageConsumer;
use Umbrella\Pms\Api\IMessageListener;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class MessageConsumer implements IMessageConsumer
{

    protected $messageListener;

    public function getMessageListener()
    {
        return $this->messageListener;
    }

    public function getMessageSelector()
    {
        
    }

    public function recieve($timeout = null)
    {
        
    }

    public function recieveNoWait()
    {
        
    }

    public function setMessageListener(IMessageListener $listener)
    {
        $this->messageListener = $listener;
        return $this;
    }

}
