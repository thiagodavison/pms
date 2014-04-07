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
class Connection implements IConnection
{

    protected $clientID;
    protected $exceptionListener;

    public function createConnectionConsumer(IDestination $destination, $messageSelector, IServerSessionPool $sessionPool, $maxMessages)
    {
        
    }

    public function createDurableConnectionConsumer(ITopic $topic, $subscriptionName, $messageSelector, IServerSessionPool $sessionPool, $maxMessages)
    {
        
    }

    public function createSession($transacted = false, $acknowledgeMode = ISession::AUTO_ACKNOWLEDGE)
    {
        
    }

    public function createSharedConnectionConsumer(IDestination $destination, $messageSelector, IServerSessionPool $sessionPool, $maxMessages)
    {
        
    }

    public function createSharedDurableConnectionConsumer(ITopic $topic, $subscriptionName, $messageSelector, IServerSessionPool $sessionPool, $maxMessages)
    {
        
    }

    public function getClientID()
    {
        return $this->clientID;
    }

    public function getExceptionListener()
    {
        return $this->exceptionListener;
    }

    public function setClientID($clientID)
    {
        $this->clientID = $clientID;
        return $this;
    }

    public function setExceptionListener(IExceptionListener $listener)
    {
        $this->exceptionListener = $listener;
        return $this;
    }

    public function start()
    {
        
    }

    public function stop()
    {
        
    }

}
