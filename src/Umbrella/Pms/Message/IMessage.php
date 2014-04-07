<?php

namespace Umbrella\Pms\Message;

/**
 * The Message interface is the root interface of all PMS messages. It defines 
 * the message header and the acknowledge method used for all messages.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IMessage
{

    const DEFAULT_DELIVERY_DELAY = 0;
    const DEFAULT_DELIVERY_MODE = 'persistent';
    const DEFAULT_PRIORITY = 4;
    const DEFAULT_TIME_TO_LIVE = 0;

    public function acknowledge();

    public function clearBody();

    public function clearProperties();

    public function getBody();

    public function getProperty();

    public function getDeliveryMode();

    public function getDeliveryTime();

    public function getDestination();

    public function getExpiration();

    public function getMessageID();

    public function getPriority();

    public function getRedelivered();

    public function getReplyTo();

    public function getType();

    public function isBodyAssignableTo($class);

    public function setBody();

    public function setProperty();

    public function setDeliveryMode();

    public function setDeliveryTime();

    public function setDestination();

    public function setExpiration();

    public function setMessageID();

    public function setPriority();

    public function setRedelivered();

    public function setReplyTo();

    public function setType();
}
