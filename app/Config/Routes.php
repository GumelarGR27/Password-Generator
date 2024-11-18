<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'PasswordController::index');
$routes->post('/generate', 'PasswordController::generate');

