PMS - PHP Message Service 
===

The PHP Message Service is a PHP API that allows applications to create, send, receive, and read messages.
The PMS API defines a common set of interfaces and associated semantics that allow programs written in the Java programming language to communicate with other messaging implementations.
The PMS API enables communication that is not only loosely coupled but also,

* Asynchronous: A PMS provider can deliver messages to a client as they arrive; a client does not have to request messages in order to receive them.
* Reliable: The PMS API can ensure that a message is delivered once and only once. Lower levels of reliability are available for applications that can afford to miss messages or to receive duplicate messages.
