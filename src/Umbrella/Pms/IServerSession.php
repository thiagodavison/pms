<?php

namespace Umbrella\Pms;

/**
 * A ServerSessionPool object is an object implemented by an application server 
 * to provide a pool of ServerSession objects for processing the messages of a 
 * ConnectionConsumer (optional).
 * 
 * Its only method is getServerSession. The PMS API does not architect how the
 * pool is implemented. It could be a static pool of ServerSession objects, or 
 * it could use a sophisticated algorithm to dynamically create ServerSession 
 * objects as needed.
 * 
 * If the ServerSessionPool is out of ServerSession objects, the 
 * getServerSession call may block. If a ConnectionConsumer is blocked, 
 * it cannot deliver new messages until a ServerSession is eventually 
 * returned.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface ISessionServicePool
{

    /**
     * Return a server session from the pool
     * @return IServerSession
     */
    public function getServerSession();
}
