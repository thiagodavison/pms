<?php

use Umbrella\Pms\Api\Message\IMessage;

namespace Umbrella\Pms\Delivery;

/**
 * @author Italo Lelis de Vietro <italolelis@lellysinformatica.cm>
 */
interface IPersister
{

    public function get($id);

    public function save(IMessage $message);

    public function complete(IMessage $message);
}
