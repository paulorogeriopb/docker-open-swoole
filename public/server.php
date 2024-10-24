<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server('0.0.0.0', 8000);
$server->on('request', function (Request $request, Response $response) {
    $response->end("Open Swoole!");
});
$server->start();