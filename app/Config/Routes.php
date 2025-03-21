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
$routes->get('/admin/change-password', 'AdminController::changePassword', ['filter' => 'authRedirect']);
$routes->post('/admin/update-password', 'AuthController::changePassword', ['filter' => 'authRedirect']);
$routes->get('/admin/galery', 'GaleryController::index', ['filter' => 'authRedirect']);
$routes->get('/admin/galery/toast', 'GaleryController::showToast', ['filter' => 'authRedirect']);
$routes->get('/admin/galery/create', 'GaleryController::create', ['filter' => 'authRedirect']);
$routes->get('/admin/galery/show/(:segment)', 'GaleryController::show/$1', ['filter' => 'authRedirect']);
$routes->post('/admin/galery/store', 'GaleryController::store', ['filter' => 'authRedirect']);
$routes->post('/admin/galery/update/(:segment)', 'GaleryController::update/$1', ['filter' => 'authRedirect']);
$routes->get('/video/stream/(:segment)', 'GaleryController::stream/$1');
$routes->get('/gallery/toggle-status/(:num)', 'GaleryController::toggleStatus/$1', ['filter' => 'authRedirect']);
$routes->get('/gallery/delete/(:num)', 'GaleryController::delete/$1', ['filter' => 'authRedirect']);
