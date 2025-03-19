<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->post('login', 'AuthController::login');
service('auth')->routes($routes);

$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/contact-us', 'Home::contactUs');
$routes->get('/about-us', 'Home::aboutUs');
$routes->get('/galeri', 'Home::galery');
$routes->get('/admin', 'GaleryController::index', ['filter' => 'authRedirect']);
$routes->get('/admin/galery', 'GaleryController::index', ['filter' => 'authRedirect']);
$routes->get('/admin/galery/toast', 'GaleryController::tesToast', ['filter' => 'authRedirect']);
$routes->get('/admin/galery/create', 'GaleryController::create', ['filter' => 'authRedirect']);
$routes->post('/admin/galery/store', 'GaleryController::store', ['filter' => 'authRedirect']);
$routes->get('/video/stream/(:segment)', 'GaleryController::stream/$1');
$routes->get('/gallery/toggle-status/(:num)', 'GaleryController::toggleStatus/$1', ['filter' => 'authRedirect']);
