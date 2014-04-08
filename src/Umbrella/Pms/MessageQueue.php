<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Easy\Collections\Queue;
use Umbrella\Pms\Api\IMessageQueue;
use Umbrella\Pms\Api\Message\IMessage;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class MessageQueue extends Queue implements IMessageQueue
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function enqueue(IMessage $item)
    {
        parent::enqueue($item);
    }

}
