<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App();

// $app->get('/', function($request, $response, $args) {
//     echo 'Hello, good people';
// });

$app->get('/', function(Request $request, Response $response, array $args) {
    $response->write('Hello, world!');
    return $response;
});

$app->get('/wasibi', function(Request $request, Response $response, array $args) {
    $response->write('Hello guy, dakun come here.');
    return $response;
});

$app->run();
?>