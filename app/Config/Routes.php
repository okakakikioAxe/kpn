<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->post('login', 'AuthController::login');
service('auth')->routes($routes);

// $routes->get('/', 'Home::index');
// $routes->get('/product', 'Home::product');
// $routes->get('/contact-us', 'Home::contactUs');
// $routes->get('/about-us', 'Home::aboutUs');
// $routes->get('/galeri', 'Home::galery');


$routes->get('/', 'Home::index_v2');
// Language-specific
$routes->get('/en', 'Home::index_v2/en');
$routes->get('/cn', 'Home::index_v2/cn');


$routes->get('/product', 'Home::product_v2');
// Language-specific
$routes->get('/en/product', 'Home::product_v2/en');
$routes->get('/cn/product', 'Home::product_v2/cn');


$routes->get('/product/(:segment)', 'Home::product_detail_v2/$1');
// Language-specific
$routes->get('/en/product/(:segment)', 'Home::product_detail_v2/$1/en');
$routes->get('/cn/product/(:segment)', 'Home::product_detail_v2/$1/cn');


$routes->get('/products/list', 'Home::productList');

$routes->get('/contact-us', 'Home::contactUs_v2');
// Language-specific
$routes->get('/en/contact-us', 'Home::contactUs_v2/en');
$routes->get('/cn/contact-us', 'Home::contactUs_v2/cn');


$routes->get('/about-us', 'Home::aboutUs_v2');
// Language-specific
$routes->get('/en/about-us', 'Home::aboutUs_v2/en');
$routes->get('/cn/about-us', 'Home::aboutUs_v2/cn');


$routes->get('/galeri', 'Home::galery_v2');
// Language-specific
$routes->get('/en/galeri', 'Home::galery_v2/en');
$routes->get('/cn/galeri', 'Home::galery_v2/cn');



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
$routes->post('/admin/product/get-new-product', 'ProductController::getNewProduct', ['filter' => 'authRedirect']);
$routes->post('/admin/product/check-available-slug', 'ProductController::checkAvailableSlug', ['filter' => 'authRedirect']);
$routes->post('/admin/product/confirm-slug', 'ProductController::confirmSlug', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-title', 'ProductController::saveProductTitle', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-image', 'ProductController::saveProductImages', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-cover', 'ProductController::saveProductCover', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-variant', 'ProductController::saveProductVariants', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-specification', 'ProductController::saveProductSpecifications', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-description', 'ProductController::saveProductDescription', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-status', 'ProductController::saveProductStatus', ['filter' => 'authRedirect']);
$routes->post('/admin/product/save-product-sort-order', 'ProductController::saveProductSortOrder', ['filter' => 'authRedirect']);
$routes->post('/admin/product/delete-product', 'ProductController::deleteProduct', ['filter' => 'authRedirect']);
$routes->get('/admin/product/edit/(:num)', 'ProductController::edit/$1', ['filter' => 'authRedirect']);
$routes->post('/admin/product/update/(:segment)', 'ProductController::update/$1', ['filter' => 'authRedirect']);
$routes->get('/admin/product/delete/(:num)', 'ProductController::delete/$1', ['filter' => 'authRedirect']);
$routes->get('/admin/product/toast', 'ProductController::showToast', ['filter' => 'authRedirect']);
$routes->get('/admin/product', 'ProductController::index', ['filter' => 'authRedirect']);

$routes->get('api/csrf-token', 'ProductController::csrfToken');
