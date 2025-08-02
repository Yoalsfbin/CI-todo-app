<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tasks', 'TaskController::index');
$routes->get('/tasks/create', 'TaskController::create');
$routes->post('/tasks/store', 'TaskController::store');