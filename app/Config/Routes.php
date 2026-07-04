<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/about', 'MainController::about');
$routes->get('/controllers', 'MainController::controllers');
$routes->get('/staff', 'MainController::staff');
$routes->get('/latest-info', 'MainController::latestInfo');
$routes->get('/downloads', 'MainController::downloads');
$routes->get('/contact', 'MainController::contact');
