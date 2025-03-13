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
$routes->get('/galery', 'Home::galery');
$routes->get('/admin', 'AdminController::index', ['filter' => 'authRedirect']);
$routes->get('/admin/galery', 'AdminController::galery', ['filter' => 'authRedirect']);
