<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('/', ['namespace'=>'App\Controllers\Front'], function($routes){
    $routes->get('', 'Home::index');
});

$routes->group('cliente', function($routes){
    $routes->get('/', 'Client::index');
    $routes->get('saludar', 'Client::saludar');
});