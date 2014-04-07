<?php

require 'vendor/autoload.php';

$connection = new \Umbrella\Pms\Connection();
$session = $connection->createSession(false, Umbrella\Pms\Api\ISession::AUTO_ACKNOWLEDGE);

$queue = $session->createQueue("test");
$queue->enqueue(new stdClass());

$producer = $session->createProducer($queue);
$producer->send();

$session->commit();

