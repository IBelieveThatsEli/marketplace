<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->post('/listings/(:num)/purchase', 'Home::purchase/$1');

$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::attemptLogin');

$routes->post('/logout', 'AuthController::logout');

$routes->get('/mylistings', 'ListingController::index');
$routes->post('/mylistings/store', 'ListingController::store');
$routes->post('/mylistings/(:num)/status', 'ListingController::updateStatus/$1');
$routes->post('/mylistings/(:num)/delete', 'ListingController::delete/$1');
$routes->get('/uploads/listings/(:segment)/(:segment)', 'UploadController::listingImage/$1/$2');

$routes->get('/profile', 'ProfileController::index');
$routes->post('/profile/update', 'ProfileController::update');
$routes->post('/profile/wallet/deposit', 'ProfileController::deposit');

$routes->get('/termsandconditions', 'TermsAndConditionsController::index');
$routes->get('/safetyandsecurity', 'SafetyAndSecurityController::index');
$routes->get('/helpcenter', 'HelpCenterController::index');
$routes->get('/contactus', 'ContactUsController::index');
