<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inicio', 'Home::inicio');

$routes->post('/login', 'Home::login');

$routes->get('/salir', 'Home::salir');

$routes->get('/obtenerUser/(:any)', 'Home::obtenerUser/$1');

$routes->post('/crear', 'Home::crear');

$routes->get('/eliminar/(:any)', 'Home::eliminar/$1');

$routes->post('/actualizar', 'Home::actualizar');

$routes->post('/registro', 'Home::registro');

$routes->get('/accesos', 'Home::accesos');
