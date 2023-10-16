<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inicio', 'Home::inicio');

$routes->post('/login', 'Home::login');

$routes->get('/salir', 'Home::salir');

$routes->get('/obtener/(:any)', 'Home::obtener/$1');

$routes->post('/registro', 'Home::crear');

$routes->get('/eliminar/(:any)', 'Home::eliminar/$1');

$routes->post('/actualizar', 'Home::actualizar');