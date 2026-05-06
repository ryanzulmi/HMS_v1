<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');


$routes->get('/', function() {
    if(session()->get('isLoggedIn')) {
        return redirect()->to('/dashboard');
    } else {
        return redirect()->to('/login');
    }
});

$routes->get('/login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->group('', ['filter' => 'auth'], function($routes) {

    //rooms routes
    $routes->get('/rooms', 'Rooms::index');
    $routes->get('/rooms/create', 'Rooms::create');
    $routes->post('/rooms', 'Rooms::store');
    $routes->get('/rooms/(:num)/edit', 'Rooms::edit/$1');
    $routes->post('/rooms/(:num)/update', 'Rooms::update/$1');
    $routes->get('/rooms/(:num)/delete', 'Rooms::delete/$1');
    $routes->get('/rooms/(:num)/detail', 'Rooms::detail/$1');

    //room types routes
    $routes->get('/room-types', 'RoomTypes::index');
    $routes->get('/room-types/create', 'RoomTypes::create');
    $routes->post('/room-types', 'RoomTypes::store');
    $routes->get('/room-types/(:num)/edit', 'RoomTypes::edit/$1');
    $routes->post('/room-types/(:num)/update', 'RoomTypes::update/$1');
    $routes->get('/room-types/(:num)/delete', 'RoomTypes::delete/$1');
    $routes->get('/room-types/(:num)/detail', 'RoomTypes::detail/$1');

});