<?php

namespace Umbrella\Pms\Message;

use Umbrella\Pms\ICompletionListener;
use Umbrella\Pms\IDestination;

/**
 * The Message interface is the root interface of all PMS messages. It defines 
 * the message header and the acknowledge method used for all messages.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IMessageProducer
{

    public function getDeliveryDelay();

    public function getDeliveryMode();

    public function getDestination();

    public function getDisabledMessageID();

    public function getPriority();

    public function getTimeToLive();

    public function setDeliveryDelay();

    public function setDeliveryMode();

    public function setDestination();

    public function setDisabledMessageID();

    public function setPriority();

    public function setTimeToLive();

    /**
     * Sends a message to a destination for an unidentified message producer, 
     * specifying delivery mode, priority and time to live, performing part of 
     * the work involved in sending the message in a separate thread and 
     * notifying the specified CompletionListener when the operation has 
     * completed.
     */
    public function send(IDestination $destination, IMessage $message, $deliveryMode = IMessage::DEFAULT_DELIVERY_MODE, $priority = IMessage::DEFAULT_PRIORITY, $timeToLive = IMessage::DEFAULT_TIME_TO_LIVE, ICompletionListener $completionListener = null);
}
