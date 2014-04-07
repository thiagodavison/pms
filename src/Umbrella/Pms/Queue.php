<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Umbrella\Pms\Api\IConnection;
use Umbrella\Pms\Api\IDestination;
use Umbrella\Pms\Api\IExceptionListener;
use Umbrella\Pms\Api\IServerSessionPool;
use Umbrella\Pms\Api\ISession;
use Umbrella\Pms\Api\ITopic;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class Queue implements Api\IQueue
{

    protected $name;
    protected $queue;

    public function __construct($name)
    {
        $this->name = $name;
        $this->queue = new \Easy\Collections\Queue();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQueue()
    {
        return $this->queue;
    }

}
