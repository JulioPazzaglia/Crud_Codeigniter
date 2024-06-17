<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tienda', 'Tienda::index');

$routes->get('productos', 'Productos::index');
$routes->get('productos/create', 'Productos::create');
$routes->get('productos/ver/(:num)', 'Productos::ver/$1');
$routes->post('productos/guardar', 'Productos::guardar');
$routes->get('productos/edit/(:num)', 'Productos::edit/$1');
$routes->post('productos/update/(:num)', 'Productos::update/$1');
$routes->get('productos/delete/(:num)', 'Productos::delete/$1');
