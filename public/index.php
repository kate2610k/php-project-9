<?php

use Slim\Factory\AppFactory;
$app = AppFactory::create();

$app->get('/', function ($request, $response) {
    return $response->write('Welcome to Slim!');
});

$app->run();
