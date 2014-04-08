<?php

namespace Umbrella\Pms\Message;

use Serializable;
use Umbrella\Pms\Api\Message\IObjectMessage;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="tb_messages")
 */
class ObjectMessage extends Message implements IObjectMessage
{

    protected $object;

    public function getObject()
    {
        return $this->object;
    }

    public function setObject(Serializable $object)
    {
        $this->object = $object;
        return $this;
    }

}
