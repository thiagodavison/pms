<?php

namespace Umbrella\Pms\Api\Message;

/**
 * A client uses a MessageConsumer object to receive messages from a 
 * destination. A MessageConsumer object is created by passing a Destination 
 * object to a message-consumer creation method supplied by a session.
 * 
 * MessageConsumer is the parent interface for all message consumers.
 * 
 * A MessageConsumer can be created with a message selector. A message selector
 * allows the client to restrict the messages delivered to the message consumer 
 * to those that match the selector.
 * 
 * A client may either synchronously receive a MessageConsumer's messages or 
 * have the MessageConsumer asynchronously deliver them as they arrive.
 * 
 * For synchronous receipt, a client can request the next message from a 
 * MessageConsumer using one of its receive methods. There are several 
 * variations of receive that allow a client to poll or wait for the next 
 * message.
 * 
 * For asynchronous delivery, a client can register a MessageListener object 
 * with a MessageConsumer. As messages arrive at the MessageConsumer, it 
 * delivers them by calling the MessageListener's onMessage method.
 * 
 * It is a client programming error for a MessageListener to throw an exception.
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IMessageConsumer
{

    /**
     * Receives the next message produced for this message consumer.
     * @return IMessage
     */
    public function recieve($timeout = null);

    /**
     * Receives the next message that arrives within the specified timeout
     * interval.
     * @return IMessage
     */
    public function recieveNoWait();
}
