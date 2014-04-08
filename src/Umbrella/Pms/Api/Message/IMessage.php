<?php

namespace Umbrella\Pms\Api\Message;

/**
 * The Message interface is the root interface of all PMS messages. It defines 
 * the message header and the acknowledge method used for all messages.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IMessage
{

    public function getId();

    public function setId($id);
}
