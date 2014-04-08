<?php

namespace Umbrella\Pms\Api;

/**
  A Session object is a single-threaded context for producing and
 * consuming messages. Although it may allocate provider resources.
 * 
 * A session serves several purposes:
 * 
 * It is a factory for its message producers and consumers.
 * It supplies provider-optimized message factories.
 * It is a factory for TemporaryTopics and TemporaryQueues.
 * It provides a way to create Queue or Topic objects for those clients 
 * that need to dynamically manipulate provider-specific destination names.
 * It supports a single series of transactions that combine work spanning its 
 * producers and consumers into atomic units.
 * It defines a serial order for the messages it consumes and the 
 * messages it produces.
 * It retains messages it consumes until they have been acknowledged.
 * It serializes execution of message listeners registered with its 
 * message consumers.
 * It is a factory for QueueBrowsers.
 * 
 * A session can create and service multiple message producers and consumers.
 * 
 * One typical use is to have a thread block on a synchronous MessageConsumer 
 * until a message arrives. The thread may then use one or more of the 
 * Session's MessageProducers.
 * 
 * If a client desires to have one thread produce messages while others 
 * consume them, the client should use a separate session for its 
 * producing thread.
 * 
 * Once a connection has been started, any session with one or more registered 
 * message listeners is dedicated to the thread of control that 
 * delivers messages to it. It is erroneous for client code to use 
 * this session or any of its constituent objects from another thread 
 * of control. The only exception to this rule is the use of the session or 
 * connection close method.
 * 
 * It should be easy for most clients to partition their work naturally 
 * into sessions. This model allows clients to start simply and incrementally 
 * add message processing complexity as their need for concurrency grows.
 * 
 * The close method is the only session method that can be called while some
 * other session method is being executed in another thread.
 * 
 * A session may be specified as transacted. Each transacted session 
 * supports a single series of transactions. Each transaction groups a 
 * set of message sends and a set of message receives into an 
 * atomic unit of work. In effect, transactions organize a session's input 
 * message stream and output message stream into series of atomic units. 
 * When a transaction commits, its atomic unit of input is acknowledged and 
 * its associated atomic unit of output is sent. If a transaction rollback 
 * is done, the transaction's sent messages are destroyed and the session's 
 * input is automatically recovered.
 * 
 * The content of a transaction's input and output units is simply those 
 * messages that have been produced and consumed within the session's current 
 * transaction.
 * 
 * A transaction is completed using either its session's commit method 
 * or its session's rollback method. The completion of a session's current 
 * transaction automatically begins the next. The result is that a transacted 
 * session always has a current transaction within which its work is done.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface ISession
{

    /**
     * Creates a MessageConsumer for the specified destination, specifying a 
     * message selector and the noLocal parameter.
     * @return IMessageConsumer
     */
    public function createConsumer(IDestination $destination, $messageSelector = null, $noLocal = true);

    /**
     * Creates a Message object.
     * 
     * @return IMessage
     */
    public function createMessage();

    /**
     * Creates an initialized TextMessage object.
     * @return Message\ITextMessage
     */
    public function createTextMessage($text = null);

    /**
     * Creates an initialized ObjectMessage object.
     * 
     * @return IObjectMessage
     */
    public function createObjectMessage(\Serializable $object = null);

    /**
     * Creates a MessageProducer to send messages to the specified destination.
     * 
     * @return Message\IMessageProducer
     */
    public function createProducer(IDestination $destination);

    /**
     * Creates a Topic object which encapsulates a specified provider-specific 
     * topic name.
     * @return ITopic
     */
    public function createTopic($topicName);
}
