<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/single', 'Blog::blog');
$routes->get('/detail', 'Detail::detail');
