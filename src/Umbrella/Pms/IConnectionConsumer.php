<?php

namespace Umbrella\Pms;

/**
 * For application servers, Connection objects provide a special facility for
 * creating a ConnectionConsumer (optional). The messages it is to consume 
 * are specified by a Destination and a message selector. In addition, a 
 * ConnectionConsumer must be given a ServerSessionPool to use for processing 
 * its messages.
 * 
 * Normally, when traffic is light, a ConnectionConsumer gets a ServerSession 
 * from its pool, loads it with a single message, and starts it. As traffic 
 * picks up, messages can back up. If this happens, a ConnectionConsumer can 
 * load each ServerSession with more than one message. This reduces the thread 
 * context switches and minimizes resource use at the expense of some 
 * serialization of message processing.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IConnectionConsumer
{

    /**
     * Gets the server session pool associated with this connection consumer.
     * @return IServerSessionPool
     */
    public function getServerSessionPool();
}
