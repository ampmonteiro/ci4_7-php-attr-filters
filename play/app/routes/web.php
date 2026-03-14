<?php

use App\Controllers\Home;
use App\Controllers\Secret;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);

$routes->post('/', [Home::class, 'create'], ['as' => 'home.create']);

$routes->post('delete', [Home::class, 'delete'], ['as' => 'home.delete']);

$routes->view('no-module', 'no-module', ['as' => 'module']);

$routes->view('no-auth', 'no-auth', ['as' => 'auth']);

$routes->get('secret', [Secret::class, 'index'], ['as' => 'secret.index']);
