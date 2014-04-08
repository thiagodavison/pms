<?php

require 'vendor/autoload.php';


$session = new Umbrella\Pms\Session();

$queue = $session->createTopic("test");

$message = $session->createObjectMessage(new stdClass());
$queue->enqueue($message);

$producer = $session->createProducer();
$producer->send($queue);

