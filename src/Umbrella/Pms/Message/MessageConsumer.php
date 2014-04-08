<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms\Message;

use Umbrella\Pms\Api\Message\IMessageConsumer;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class MessageConsumer implements IMessageConsumer
{

    public function recieve($timeout = null)
    {
        
    }

    public function recieveNoWait()
    {
        
    }

}
