<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registro', 'ControllerRegistro::index');
$routes->get('/inicioSesion', 'ControllerInicioSesion::index');