<?php

namespace Umbrella\Pms\Api;

/**
 * If a PMS provider detects a serious problem with a Connection object, it 
 * informs the Connection object's ExceptionListener, if one has been 
 * registered. It does this by calling the listener's onException method, 
 * passing it a PMSException argument describing the problem.
 * 
 * An exception listener allows a client to be notified of a problem 
 * asynchronously. Some connections only consume messages, so they would have 
 * no other way to learn that their connection has failed.
 * 
 * A PMS provider should attempt to resolve connection problems itself before 
 * it notifies the client of them.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IExceptionListener
{

    /**
     * Notifies user of a JMS exception.
     */
    public function onException(PMSException $exception);
}
