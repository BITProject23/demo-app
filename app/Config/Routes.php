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
$menu_items ['Course_create'] = 'CourseController::create';
$menu_items ['Course_View'] = 'CourseController::showdata';


//$menu_items ['Course_UpdateView'] = 'CourseController::singleCourse';
//$menu_items ['Course_update'] = 'CourseController::update';


$menu_items ['Subject_add'] = 'SubjectController::index';
$menu_items ['Subject_create'] = 'SubjectController::create';
$menu_items ['Subject_View'] = 'SubjectController::showdata';
$routes->get('Subject_Edit/(:num)', 'SubjectController::editdata/$1');
$routes->post('Subject_Update', 'SubjectController::updatedata');

$menu_items ['Subject_assign'] = 'CourseSubjectController::index';
$menu_items ['Subject_save'] = 'CourseSubjectController::create';
$menu_items ['Course_join'] = 'CourseSubjectController::courseSubjectJoin';


$menu_items ['Lecturer_add'] = 'LecturerController::index';
$menu_items ['Lecturer_create'] = 'LecturerController::create';
$menu_items ['Lecturer_View'] = 'LecturerController::showdata';
$routes->get('Lecturer_Edit/(:num)', 'LecturerController::editdata/$1');
$routes->post('Lecturer_Update', 'LecturerController::updatedata');

$menu_items ['CourseLecturer_assign'] = 'CourseLecturerController::index';
$menu_items ['CourseLecturer_save'] = 'CourseLecturerController::save';
$menu_items ['CourseLecturer_View'] = 'CourseLecturerController::courseLecturerJoin';

$menu_items ['Batch_add'] = 'BatchController::index';
$menu_items ['getCourseCode'] = 'BatchController::getCourseCode';
$menu_items ['Batch_create'] = 'BatchController::create';
$menu_items ['Batch_View'] = 'BatchController::showCourseBatchdata';
$routes->get('Batch_Edit/(:num)', 'BatchController::editdata/$1');
$routes->post('Batch_Update', 'BatchController::updatedata');
$routes->get('Batch_Timetable/(:num)','BatchController::timetable/$1');

$routes->post('Batch_Timetable_create' , 'BatchTimeFrameController::create');

$menu_items ['Batch_By_Course'] = 'BatchController::batchByCourse';


$menu_items ['Enroll_Student/(:num)'] = 'EnrollmentController::index/$1';
$menu_items ['Enrollment_create'] = 'EnrollmentController::create';
$menu_items ['Enrollment_search'] = 'EnrollmentController::searchdata';


$menu_items ['Student_add'] = 'StudentContoller::index';
$menu_items ['student_create'] = 'StudentContoller::create';
$menu_items ['Student_View'] = 'StudentContoller::showdata';
$routes->get('Student_Edit/(:num)', 'StudentContoller::editdata/$1');
$routes->get('Student_Delete/(:num)', 'StudentContoller::deleteData/$1');
$routes->post('Student_Update', 'StudentContoller::updatedata');




$menu_items ['Timetable'] = 'TimetableController::index';
$menu_items ['Payment'] = 'PaymentController::index';

$menu_items ['lo'] = 'MenuController::login';
$menu_items ['coutab'] = 'MenuController::courseTable';
$menu_items ['Student_Report'] = 'ReportController::index';
$menu_items ['Lecturer_Report'] = 'ReportController::index01';

/*$menu_items ['contact-us'] = 'MenuController::contact-us';
$menu_items ['online-registration'] = 'MenuController::register';*/

$menu_items ['test-db'] = 'DbTestController::index';

$routes->map($menu_items);

// $routes->get('Course_UpdateView','CourseController::singleCourse');
$routes->get('Course_Edit/(:num)','CourseController::editdata/$1');
$routes->post('Course_Update','CourseController::updatedata');

$routes->get('courseSubjectEdit/(:num)', 'CourseSubjectController::edit/$1');
$routes->post('courseSubjectUpdate', 'CourseSubjectController::update');

// $routes->get('load','ExampleController::index');
// $routes->post('load_data','ExampleController::load_data');

$routes->get('load','BatchController::index');
$routes->post('load_data','BatchController::load_data');



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
