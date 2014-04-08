<?php

namespace Umbrella\Pms\Message;

use Umbrella\Pms\Api\Message\ITextMessage;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="tb_messages")
 */
class TextMessage extends Message implements ITextMessage
{

    protected $text;

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

}
