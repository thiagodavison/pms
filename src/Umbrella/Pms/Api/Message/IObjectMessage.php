<?php

namespace Umbrella\Pms\Api\Message;

/**
 * An ObjectMessage object is used to send a message that contains a 
 * serializable object in the Java programming language ("PHP object"). 
 * It inherits from the Message interface and adds a body containing a single 
 * reference to an object. Only Serializable Java objects can be used.
 * 
 * When a client receives an ObjectMessage, it is in read-only mode. If a 
 * client attempts to write to the message at this point, a 
 * MessageNotWriteableException is thrown. If clearBody is called, the message 
 * can now be both read from and written to.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IObjectMessage extends IMessage
{

    public function getObject();

    public function setObject();
}
