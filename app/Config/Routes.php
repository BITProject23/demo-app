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
// $routes->get('/', 'Home::index');


$menu_items = [];

$menu_items ['login'] = 'LoginController::index';
$menu_items ['login/auth'] = 'LoginController::authenticate';
$menu_items ['logout'] = 'LoginController::logout';

if(session('login_status')==true){

$routes->get('/', 'DashboardController::index');



$menu_items ['Dashboard_View'] = 'DashboardController::index';

$menu_items ['Register'] = 'SigninController::index'; //ex : [url pattern] = 'Controller_name :: method(index)'
$menu_items ['Regcreate'] = 'SigninController::create';



$menu_items ['User_add'] = 'UserController::index';
$menu_items ['User_create'] = 'UserController::create';
$menu_items ['User_View'] = 'UserController::showdata';
$routes->get('User_Edit/(:num)', 'UserController::editdata/$1');
$routes->post('User_Update', 'UserController::updatedata');
$routes->get('User_Delete/(:num)', 'UserController::deleteData/$1');



$menu_items ['User_PasswordReset'] = 'LoginController::passwordReset';
$menu_items ['User_PasswordResetAction'] = 'LoginController::passwordResetAction';

if(session('user_type') == "ADMIN") {

$menu_items ['Course_add'] = 'CourseController::index';
$menu_items ['Course_create'] = 'CourseController::create';
$menu_items ['Course_View'] = 'CourseController::showdata';
$routes->get('Course_Edit/(:num)','CourseController::editdata/$1');
$routes->post('Course_Update','CourseController::updatedata');
$routes->get('Course_Delete/(:num)', 'CourseController::deleteData/$1');


//$menu_items ['Course_UpdateView'] = 'CourseController::singleCourse';
//$menu_items ['Course_update'] = 'CourseController::update';


$menu_items ['Subject_add'] = 'SubjectController::index';
$menu_items ['Subject_create'] = 'SubjectController::create';
$menu_items ['Subject_View'] = 'SubjectController::showdata';
$routes->get('Subject_Edit/(:num)', 'SubjectController::editdata/$1');
$routes->post('Subject_Update', 'SubjectController::updatedata');
$routes->get('Subject_Delete/(:num)', 'SubjectController::deleteData/$1');
$menu_items ['Subject_By_Batch'] = 'SubjectController::subjectByBatch';

$menu_items ['Subject_assign'] = 'CourseSubjectController::index';
$menu_items ['courseSubject_create'] = 'CourseSubjectController::create';
$menu_items ['courseSubject_View'] = 'CourseSubjectController::courseSubjectview';
$routes->get('courseSubjectEdit/(:num)', 'CourseSubjectController::edit/$1');
$routes->post('courseSubjectUpdate', 'CourseSubjectController::update');
$routes->get('courseSubject_Delete/(:num)', 'CourseSubjectController::deleteData/$1');


$menu_items ['Lecturer_add'] = 'LecturerController::index';
$menu_items ['Lecturer_create'] = 'LecturerController::create';
$menu_items ['Lecturer_View'] = 'LecturerController::showdata';
$routes->get('Lecturer_Edit/(:num)', 'LecturerController::editdata/$1');
$routes->post('Lecturer_Update', 'LecturerController::updatedata');
$routes->get('Lecturer_Delete/(:num)', 'LecturerController::deleteData/$1');

$menu_items ['Appointment_add/(:num)'] = 'AppointController::index/$1';
$menu_items ['Appointment_create'] = 'AppointController::create';
$menu_items ['Appointment_View'] = 'AppointController::showdata';
$routes->get('Appointment_Delete/(:num)', 'AppointController::deleteData/$1');

$menu_items ['Subject_By_Course'] = 'CourseSubjectController::subjectByCourse';


$menu_items ['Batch_add'] = 'BatchController::index';
$menu_items ['getCourseCode'] = 'BatchController::getCourseCode';
$menu_items ['Batch_create'] = 'BatchController::create';
$menu_items ['Batch_View'] = 'BatchController::showCourseBatchdata';
$routes->get('Batch_Edit/(:num)', 'BatchController::editdata/$1');
$routes->post('Batch_Update', 'BatchController::updatedata');
$routes->get('Batch_Timetable/(:num)','BatchController::timetable/$1');

$routes->post('Batch_Timetable_create' , 'BatchTimeFrameController::create');

$menu_items ['Batch_By_Course'] = 'BatchController::batchByCourse';

$routes->post('load_subjectTime','BatchTimeFrameController::load_subject_time_data');

$menu_items ['Batch_By_Enrollment'] = 'EnrollmentController::batchByEnrollment';
$menu_items ['Enroll_Student/(:num)'] = 'EnrollmentController::index/$1';
$menu_items ['Enrollment_create'] = 'EnrollmentController::create';
$menu_items ['Enrollment_View'] = 'EnrollmentController::showdata';
$routes->get('Enrollment_Delete/(:num)', 'EnrollmentController::deleteData/$1');

}
// $menu_items ['Enrollment_data_search'] = 'EnrollmentController::searchdata';


$menu_items ['Student_add'] = 'StudentContoller::index';
$menu_items ['student_create'] = 'StudentContoller::create';
$menu_items ['Student_View'] = 'StudentContoller::showdata';
$routes->get('Student_Edit/(:num)', 'StudentContoller::editdata/$1');
$routes->get('Student_Delete/(:num)', 'StudentContoller::deleteData/$1');
$routes->post('Student_Update', 'StudentContoller::updatedata');
$menu_items ['Student_By_Batch'] = 'StudentContoller::studentBybatch';

$menu_items ['Students_payment'] = 'StudentContoller::paymentBystudents';


$menu_items ['Payment_add'] = 'PaymentController::index';
$menu_items ['Payment_create'] = 'PaymentController::create';
$menu_items ['Payment_View'] = 'PaymentController::showdata';

if(session('user_type') == "ADMIN") {

$menu_items ['Payment_Search'] = 'ReportController::paymentsearch';
$menu_items ['Payment_Search_View'] = 'ReportController::paymentview';
$menu_items ['Enrollment_search'] = 'ReportController::enrollmentsearch';
$menu_items ['Enrollment_Search_View'] = 'ReportController::enrollmentview';
$menu_items ['Timetable_Search'] = 'ReportController::timetableSearch';
$menu_items ['Timetable_Search_View'] = 'ReportController::timetableview';

}

$menu_items ['Logout'] = 'LogoutController::index';


$menu_items ['Timetable'] = 'TimetableController::index';

if(session('user_type') == "LECTURER") {

$menu_items ['Lecturer_Portal'] = 'LecturerPortalController::index';
$menu_items ['Assign_Marks'] = 'LecturerPortalController::create_marks';
$menu_items ['Store_Marks'] = 'LecturerPortalController::store_marks';
$menu_items ['View_Marks'] = 'LecturerPortalController::view_marks';
$menu_items ['View_Timetable'] = 'LecturerPortalController::view_timetable';
$menu_items ['View_Appointment'] = 'LecturerPortalController::showAppointData';
$menu_items ['Subject_By_Batch'] = 'SubjectController::subjectByBatch';

}

$menu_items ['Student_Portal'] = 'StudentPortalController::index';
$menu_items ['Get_Marks'] = 'StudentPortalController::get_marks';
$menu_items ['Student_Payment'] = 'StudentPortalController::showdata';

$menu_items ['Receptionist_Portal'] = 'ReceptionistPortalContoller::index';
$menu_items ['View_Students'] = 'ReceptionistPortalContoller::view_students';






$menu_items ['lo'] = 'MenuController::login';
$menu_items ['coutab'] = 'MenuController::courseTable';
$menu_items ['Student_Report'] = 'ReportController::index';
$menu_items ['Lecturer_Report'] = 'ReportController::index01';

/*$menu_items ['contact-us'] = 'MenuController::contact-us';
$menu_items ['online-registration'] = 'MenuController::register';*/

$menu_items ['test-db'] = 'DbTestController::index';



// $routes->get('Course_UpdateView','CourseController::singleCourse');


// $routes->get('load','ExampleController::index');
// $routes->post('load_data','ExampleController::load_data');

$routes->get('load','BatchController::index');
$routes->post('load_data','BatchController::load_data');



}else{
    //return redirect()->to('/logout');
}

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
