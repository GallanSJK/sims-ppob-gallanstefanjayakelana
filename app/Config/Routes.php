<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/register', 'Register::index');
$routes->get('/login', 'Login::index');
$routes->get('/login-process', 'Login::login_process');
$routes->get('/logout', 'Login::logout');
$routes->get('/account', 'Account::index');
