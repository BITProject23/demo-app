<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*$routes->set404Override(function (){
    return view('test');
});*/

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
 $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');



$menu_items = [];

$menu_items ['Register'] = 'SigninController::index'; //ex : [url pattern] = 'Controller_name :: method(index)'
$menu_items ['Regcreate'] = 'SigninController::create';

$menu_items ['login'] = 'LoginController::index';
$menu_items ['login/auth'] = 'LoginController::authenticate';
$menu_items ['logout'] = 'LoginController::logout';

$menu_items ['Course_add'] = 'CourseController::index';
$menu_items ['create'] = 'CourseController::create';
$menu_items ['Course_View'] = 'CourseController::showdata';
$menu_items ['Course_update'] = 'CourseController::update';

$menu_items ['Subject_add'] = 'SubjectController::index';
$menu_items ['Subcreate'] = 'SubjectController::create';
$menu_items ['Subject_View'] = 'SubjectController::showdata';

$menu_items ['Lecturer_add'] = 'LecturerController::index';
$menu_items ['LecCreate'] = 'LecturerController::create';
$menu_items ['Lecturer_View'] = 'LecturerController::showdata';

$menu_items ['Batch'] = 'BatchController::index';


$menu_items ['Student_add'] = 'StudentContoller::index';
$menu_items ['stuCreate'] = 'StudentContoller::create';
$menu_items ['Student_View'] = 'StudentContoller::showdata';

$menu_items ['Timetable'] = 'TimetableController::index';
$menu_items ['Payment'] = 'PaymentController::index';

$menu_items ['lo'] = 'MenuController::login';
$menu_items ['coutab'] = 'MenuController::courseTable';

/*$menu_items ['contact-us'] = 'MenuController::contact-us';
$menu_items ['online-registration'] = 'MenuController::register';*/

$menu_items ['test-db'] = 'DbTestController::index';

$routes->map($menu_items);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
