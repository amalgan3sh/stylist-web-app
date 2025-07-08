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
$routes->get('/admin', 'AdminLogin::index');
$routes->post('/admin/login', 'AdminLogin::login');
$routes->get('/admin/dashboard', 'AdminDashboard::index');
$routes->post('/admin/logout', 'AdminLogin::logout');
$routes->get('/admin/blog', 'AdminBlog::index');
$routes->get('/admin/services', 'AdminServices::index');
$routes->get('/admin/portfolio', 'AdminPortfolio::index');
$routes->get('/admin/enquiries', 'AdminEnquiries::index');
$routes->get('/admin/team', 'AdminTeam::index');
$routes->get('/admin/settings', 'AdminSettings::index');

