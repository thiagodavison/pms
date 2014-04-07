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

    public function getAcknowledge();

    public function getBody();

    public function getDestination();

    public function getRedelivered();

    public function setAcknowledge($acknowledge);

    public function setBody($body);

    public function setDestination($destination);

    public function setRedelivered($redelivered);
}
