<?php

namespace Shaleighna;

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

class Server implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $conn)
    {
        echo 'Something connected';
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        echo 'Someoone wants something';
    }

    public function onClose(ConnectionInterface $conn)
    {
        echo 'Connection closed';
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo 'Error';
    }
}