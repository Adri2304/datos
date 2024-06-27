<?php
namespace App\controllers;
use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('/monkeycash',function(RouteCollectorProxy $monkeycash){
    $monkeycash->get('/{telefono}', MonkeyCash::class . ':validarCuenta');
    $monkeycash->post('', MonkeyCash::class . ':create');
});

$app->group('/bancoComercial',function(RouteCollectorProxy $bancoComercial){
    $bancoComercial->put('/actualizarSaldos', BancoComercial::class . ':actualizarSaldos');
});

$app->get('/hello', function ($request, $response, $args) {
    $response->getBody()->write("Hello, World!");
    return $response;
});

