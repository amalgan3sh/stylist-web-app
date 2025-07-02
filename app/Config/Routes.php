<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/service', 'Home::service');
$routes->get('/service-details', 'Home::serviceDetails');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog-details', 'Home::blogDetails');
$routes->get('/appointment', 'Home::appointment');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/gallery-details', 'Home::galleryDetails');
$routes->get('/team', 'Home::team');
$routes->get('/team-details', 'Home::teamDetails');
$routes->get('/contact', 'Home::contact');

