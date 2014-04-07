<?php

namespace Umbrella\Pms;

/**
 * A MessageListener object is used to receive asynchronously delivered 
 * messages.
 * 
 * Each session must ensure that it passes messages serially to the listener. 
 * This means that a listener assigned to one or more consumers of the same 
 * session can assume that the onMessage method is not called with the next 
 * message until the session has completed the last call.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IMessageListener
{

    /**
     * Passes a message to the listener.
     */
    public function onMessage(IMessage $message);
}
