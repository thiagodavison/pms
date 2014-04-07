<?php

namespace Umbrella\Pms\Api;

/**
 * A Topic object encapsulates a provider-specific topic name. 
 * It is the way a client specifies the identity of a topic to PMS API methods. 
 * For those methods that use a Destination as a parameter, 
 * a Topic object may used as an argument . For example, a Topic can be used 
 * to create a MessageConsumer and a MessageProducer by calling:
 * 
 * Session.CreateConsumer(Destination destination)
 * Session.CreateProducer(Destination destination)
 * 
 * Many publish/subscribe (pub/sub) providers group topics into hierarchies and 
 * provide various options for subscribing to parts of the hierarchy. 
 * The PMS API places no restriction on what a Topic object represents. 
 * It may be a leaf in a topic hierarchy, or it may be a larger part 
 * of the hierarchy.
 * 
 * The organization of topics and the granularity of subscriptions to them 
 * is an important part of a pub/sub application's architecture. 
 * The PMS API does not specify a policy for how this should be done. 
 * If an application takes advantage of a provider-specific topic-grouping 
 * mechanism, it should document this. If the application is installed 
 * using a different provider, it is the job of the administrator to construct 
 * an equivalent topic architecture and create equivalent Topic objects.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface ITopic extends IDestination
{

    /**
     * Gets the name of this topic.
     */
    public function getTopicName();
}
