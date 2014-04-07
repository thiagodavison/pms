<?php

namespace Umbrella\Pms\Api\Message;

use Umbrella\Pms\ICompletionListener;
use Umbrella\Pms\IDeliveryMode;

/**
 * The Message interface is the root interface of all PMS messages. It defines 
 * the message header and the acknowledge method used for all messages.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IMessageProducer
{

    public function getDeliveryMode();

    public function getDestination();

    public function getPriority();

    public function setDeliveryMode($deliveryMode);

    public function setDestination($destination);

    public function setPriority($priority);

    /**
     * Sends a message to a destination for an unidentified message producer, 
     * specifying delivery mode, priority and time to live, performing part of 
     * the work involved in sending the message in a separate thread and 
     * notifying the specified CompletionListener when the operation has 
     * completed.
     */
    public function send(IMessage $message, $deliveryMode = IDeliveryMode::PERSISTENT, $priority = IMessage::DEFAULT_PRIORITY, ICompletionListener $completionListener = null);
}
