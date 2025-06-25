<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->post('login', 'AuthController::login');
service('auth')->routes($routes);

// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index_v3');
// $routes->get('/product', 'Home::product');
$routes->get('/product', 'Home::product_v3');
$routes->get('/product/(:segment)', 'Home::product_detail_v3/$1');
// $routes->get('/contact-us', 'Home::contactUs');
$routes->get('/contact-us', 'Home::contactUs_v3');
// $routes->get('/about-us', 'Home::aboutUs');
$routes->get('/about-us', 'Home::aboutUs_v3');
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
$routes->get('/admin/product/create', 'ProductController::create', ['filter' => 'authRedirect']);
$routes->post('/admin/product/store', 'ProductController::store', ['filter' => 'authRedirect']);
$routes->get('/admin/product/edit/(:num)', 'ProductController::edit/$1', ['filter' => 'authRedirect']);
$routes->post('/admin/product/update/(:segment)', 'ProductController::update/$1', ['filter' => 'authRedirect']);
$routes->get('/admin/product/delete/(:num)', 'ProductController::delete/$1', ['filter' => 'authRedirect']);
$routes->get('/admin/product/toast', 'ProductController::showToast', ['filter' => 'authRedirect']);
$routes->get('/admin/product', 'ProductController::index', ['filter' => 'authRedirect']);
