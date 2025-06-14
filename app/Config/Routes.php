<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/registro', 'ControllerRegistro::index');
$routes->post('registro/procesarRegistro', 'ControllerRegistro::procesarRegistro');
$routes->get('/inicioSesion', 'ControllerInicioSesion::index');
$routes->post('inicioSesion/procesarInicioSesion', 'ControllerInicioSesion::procesarInicioSesion');
