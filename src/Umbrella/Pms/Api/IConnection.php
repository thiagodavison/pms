<?php

namespace Umbrella\Pms\Api;

/**
 * A Connection object is a client's active connection to its JMS provider. 
 * It typically allocates provider resources outside the PHP.
 * 
 * Connections support concurrent use.
 * 
 * A connection serves several purposes:
 * 
 * It encapsulates an open connection with a PMS provider. It typically 
 * represents an open TCP/IP socket between a client and the service provider 
 * software.
 * Its creation is where client authentication takes place.
 * It can specify a unique client identifier.
 * It provides a ConnectionMetaData object.
 * It supports an optional ExceptionListener object.
 * 
 * Because the creation of a connection involves setting up authentication and 
 * communication, a connection is a relatively heavyweight object. Most clients 
 * will do all their messaging with a single connection. Other more advanced
 * applications may use several connections. The JMS API does not architect a 
 * reason for using multiple connections; however, there may be operational 
 * reasons for doing so.
 * 
 * A PMS client typically creates a connection, one or more sessions, and a 
 * number of message producers and consumers. When a connection is created, 
 * it is in stopped mode. That means that no messages are being delivered.
 * 
 * It is typical to leave the connection in stopped mode until setup is 
 * complete (that is, until all message consumers have been created). At that 
 * point, the client calls the connection's start method, and messages begin 
 * arriving at the connection's consumers. This setup convention minimizes any 
 * client confusion that may result from asynchronous message delivery while 
 * the client is still in the process of setting itself up.
 * 
 * A connection can be started immediately, and the setup can be done 
 * afterwards. Clients that do this must be prepared to handle asynchronous 
 * message delivery while they are still in the process of setting up.
 * 
 * A message producer can send messages while a connection is stopped.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IConnection
{

    /**
     * Creates a connection consumer for this connection (optional operation) on
     *  the specific destination.
     * @return IConnectionConsumer
     */
    public function createConnectionConsumer(IDestination $destination, $messageSelector, IServerSessionPool $sessionPool, $maxMessages);

    /**
     * Creates a connection consumer for this connection (optional operation) on
     *  the specific topic using an unshared durable subscription with the 
     * specified name.
     * @return IConnectionConsumer
     */
    public function createDurableConnectionConsumer(ITopic $topic, $subscriptionName, $messageSelector, IServerSessionPool $sessionPool, $maxMessages);

    /**
     * Creates a Session object, specifying transacted and acknowledgeMode.
     * @return ISession
     */
    public function createSession($transacted = false, $acknowledgeMode = ISession::AUTO_ACKNOWLEDGE);

    /**
     * Creates a connection consumer for this connection (optional operation) 
     * on the specific topic using a shared non-durable subscription with 
     * the specified name.
     * @return IConnectionConsumer
     */
    public function createSharedConnectionConsumer(IDestination $destination, $messageSelector, IServerSessionPool $sessionPool, $maxMessages);

    /**
     * Creates a connection consumer for this connection (optional operation) on
     * the specific topic using an shared durable subscription with the 
     * specified name.
     * @return IConnectionConsumer
     */
    public function createSharedDurableConnectionConsumer(ITopic $topic, $subscriptionName, $messageSelector, IServerSessionPool $sessionPool, $maxMessages);

    /**
     * Gets the client identifier for this connection
     * @return string
     */
    public function getClientID();

    /**
     * Gets the ExceptionListener for this connection
     * @return string
     */
    public function getExceptionListener();

    /**
     * Sets the client identifier for this connection
     * @return IConnection
     */
    public function setClientID($clientID);

    /**
     * Sets the ExceptionListener for this connection
     * @return IConnection
     */
    public function setExceptionListener(IExceptionListener $listener);

    /**
     * Starts (or restarts) a connection's delivery of incoming messages.
     * @return IConnection
     */
    public function start();

    /**
     * Temporarily stops a connection's delivery of incoming messages.
     * @return IConnection
     */
    public function stop();
}
