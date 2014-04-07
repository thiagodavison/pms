<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms\Delivery;

use Umbrella\Pms\Api\IConnection;
use Umbrella\Pms\Api\IDestination;
use Umbrella\Pms\Api\IExceptionListener;
use Umbrella\Pms\Api\IServerSessionPool;
use Umbrella\Pms\Api\ISession;
use Umbrella\Pms\Api\ITopic;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class DocrineDelivery implements IDelivery
{

    protected $em;
    protected $entityClass;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEm()
    {
        return $this->em;
    }

    public function getEntityClass()
    {
        return $this->entityClass;
    }

    public function setEm($em)
    {
        $this->em = $em;
    }

    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;
    }

    public function send(\Easy\Collections\Queue $queue)
    {
        foreach ($queue as $item) {
            $message = new \Umbrella\Pms\Message\Message();
            $message->setBody($item);
            $this->em->persist($item);
        }

        $this->em->flush();
        return $this;
    }

}
