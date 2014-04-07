<?php

namespace Umbrella\Pms\Message;

/**
 * A TextMessage object is used to send a message containing a string.
 * It inherits from the Message interface and adds a text message body.
 * This message type can be used to transport text-based messages, including 
 * those with XML content.
 * 
 * When a client receives a TextMessage, it is in read-only mode. If a client 
 * attempts to write to the message at this point, a 
 * MessageNotWriteableException is thrown. If clearBody is called, 
 * the message can now be both read from and written to.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface ITextMessage extends IMessage
{

    public function getText();

    public function setText();
}
