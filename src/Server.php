<?php
require '../vendor/autoload.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Collab\Messenger;

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Messenger()
        )
    ),
    5267
);

$server->run();
