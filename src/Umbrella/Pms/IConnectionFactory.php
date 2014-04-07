<?php

namespace Umbrella\Pms;

/**
 * A ConnectionFactory object encapsulates a set of connection configuration 
 * parameters that has been defined by an administrator. A client uses it to 
 * create a connection with a JMS provider.
 * 
 * A ConnectionFactory object is a PMS administered object and supports 
 * concurrent use.
 * 
 * PMS administered objects are objects containing configuration information 
 * that are created by an administrator and later used by JMS clients. They 
 * make it practical to administer the JMS API in the enterprise.
 * 
 * Although the interfaces for administered objects do not explicitly 
 * depend on the PHP Naming and Directory Interface (PNDI) API, the PMS API 
 * establishes the convention that PMS clients find administered objects by 
 * looking them up in a PNDI namespace.
 * 
 * An administrator can place an administered object anywhere in a namespace. 
 * The PMS API does not define a naming policy.
 * 
 * It is expected that PMS providers will provide the tools an administrator 
 * needs to create and configure administered objects in a PNDI namespace. 
 * PMS provider implementations of administered objects should be 
 * php.Serializable so that they can be 
 * stored in all PNDI naming contexts.
 * 
 * This strategy provides several benefits:
 * 
 * It hides provider-specific details from PMS clients.
 * It abstracts administrative information into objects in the 
 * PHP programming language ("PHP objects") that are easily organized and 
 * administered from a common management console.
 * 
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IConnectionFactory
{

    /**
     * Creates a connection with the specified user identity.
     * @return IConnection
     */
    public function createConnection($userName = null, $password = null);

    /**
     * Creates a PMSContext with the default user identity and an 
     * unspecified sessionMode.
     * 
     * @return IPMSContext
     */
    public function createContext($userName = null, $password = null, $sessionMode = null);
}
