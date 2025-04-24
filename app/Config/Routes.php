<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Menentukan rute-rute dalam aplikasi
// Rute utama (homepage), akan memanggil metode index() dari controller Home
$routes->get('/', 'Home::index');

// Rute untuk halaman blog, akan memanggil metode blog() dari controller Blog
$routes->get('/single', 'Blog::blog');

// Rute untuk halaman detail, akan memanggil metode detail() dari controller Detail
$routes->get('/detail', 'Detail::detail');

// Rute untuk halaman resume, akan memanggil metode resume() dari controller Resume
$routes->get('/resume', 'Resume::resume');

// Rute untuk halaman about, akan memanggil metode about() dari controller About
$routes->get('/about', 'About::about');

// Rute untuk halaman skills, akan memanggil metode skills() dari controller Skills
$routes->get('/skills', 'Skills::skills');

// Rute untuk halaman projects, akan memanggil metode projects() dari controller Projects
$routes->get('/projects', 'Projects::projects');

// Rute untuk halaman contact, akan memanggil metode contact() dari controller Contact
$routes->get('/contact', 'Contact::contact');



$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/dashboard', 'AuthController::dashboard');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/single/(:num)', 'Single::single/$1');
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/create', 'AdminController::create');
$routes->post('/admin/store', 'AdminController::store');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/update/(:num)', 'AdminController::update/$1');
$routes->post('/admin/delete/(:num)', 'AdminController::delete/$1');
