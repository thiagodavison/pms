<?php

namespace Umbrella\Pms\Api;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface ITopicPublisher extends Message\IMessageProducer
{

    /**
     * Gets the Topic associated with this subscriber.
     * @return ITopic
     */
    public function getTopic();

    public function publish(Message\IMessage $message, $deliveryMode = Message\IMessage::DEFAULT_DELIVERY_MODE, $timeToLive = Message\IMessage::DEFAULT_TIME_TO_LIVE);
}
