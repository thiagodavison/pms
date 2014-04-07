<?php

namespace Umbrella\Pms\Api;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IQueue extends IDestination
{

    public function getQueue();

    public function getName();
}
