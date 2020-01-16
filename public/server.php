<?php

require_once '../vendor/autoload.php';

use Ratchet\Server\IoServer;
use Shaleighna\Bullsockets\Server;

$server = IoServer::factory(
    new Server(),
    8080
);

$server->run();