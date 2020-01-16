<?php

require_once 'vendor/autoload.php';

use Ratchet\Server\IoServer;
use Shaleighna\Server;

$server = IoServer::factory(
    new Server(),
    80
);

$server->run();