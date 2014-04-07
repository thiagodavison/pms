<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Umbrella\Pms;

use Umbrella\Pms\Api\ITopic;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.com>
 */
class Topic implements ITopic
{

    protected $topicName;

    public function __construct($topicName)
    {
        $this->topicName = $topicName;
    }

    public function getTopicName()
    {
        return $this->topicName;
    }

}
