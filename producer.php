<?php

define('QUEUE', 21671);
$queue = msg_get_queue(QUEUE);

$object = new stdclass;
$object->name = 'foo';
$object->id = uniqid();

if (msg_send($queue, 1, $object)) {
    echo "added to queue  \n";
    // you can use the msg_stat_queue() function to see queue status
    print_r(msg_stat_queue($queue));
} else {
    echo "could not add message to queue \n";
}