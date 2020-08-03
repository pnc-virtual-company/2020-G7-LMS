<?php
namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
require SYSTEMPATH . 'Config/Routes.php';
}

/**
* --------------------------------------------------------------------
* Router Setup
* --------------------------------------------------------------------
*/
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
* --------------------------------------------------------------------
* Route Definitions
* --------------------------------------------------------------------
*/

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//department route
$routes->group('department', function ($routes) {
$routes->add('/', 'Department::index',['filter' => 'auth']);
$routes->add('create', 'Department::createDepartment',['filter' => 'auth']);
$routes->add('remove/(:num)', 'Department::deleteDepartment/$1',['filter' => 'auth']);
$routes->add('update', 'Department::updateDepartment',['filter' => 'auth']);
});

//position route
$routes->group('position', function($routes) {
$routes->add('/', 'Position::index',['filter' => 'auth']);
$routes->add('create', 'Position::createPosition',['filter' => 'auth']);
$routes->add('remove/(:num)', 'Position::deletePosition/$1',['filter' => 'auth']);
$routes->add('update', 'Position::updatePosition',['filter' => 'auth']);
});
$routes->add('/', 'User::login');
$routes->add('/', 'User::login',['filter' => 'noauth']);
$routes->add('logout', 'User::logout');
$routes->add('leaves', 'Leave::showLeave',['filter' => 'auth']);
$routes->add('your_leave', 'Your_Leave::leave',['filter' => 'auth']);
$routes->group('employee', function($routes)
{
$routes->add('/', 'Employee::index',['filter' => 'auth']);
$routes->add('add', 'Employee::addEmployee',['filter' => 'auth']);
$routes->add('delete/(:num)', 'Employee::deleteEmployee/$1',['filter' => 'auth']);
$routes->add('update', 'Employee::updateEmployee',['filter' => 'auth']);
});
/**
* --------------------------------------------------------------------
* Additional Routing
* --------------------------------------------------------------------
*
* There will often be times that you need additional routing and you
* need to it be able to override any defaults in this file. Environment
* based routes is one such time. require() additional route files here
* to make that happen.
*
* You will have access to the $routes object within that file without
* needing to reload it.
*/
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
