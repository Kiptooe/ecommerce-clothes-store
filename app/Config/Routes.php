<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//$routes->get('/', 'Home::index');
$routes->add('/', 'User::index');
$routes->add('register','User::show/register');
$routes->add('login','User::show/login');
$routes->add('logout','User::logout');
$routes->add('userlogin','User::processLogin');
$routes->add('edituser','AdminController::fetchAllUsers');
$routes->add('user-registration','User::processRegistration');
$routes->add('createuser','AdminController::show/create_user');
$routes->add('createrole','AdminController::show/create_role');
$routes->add('editsubcategory','AdminController::fetchAllSubcategories');
$routes->add('createcategory','AdminController::show/create_category');
$routes->add('createsubcategory','AdminController::show/create_subcategory');
$routes->add('createproduct','AdminController::show/create_product');
$routes->add('Admincreateuser','AdminController::createAccount');
$routes->add('Admincreaterole','AdminController::createRole');
$routes->add('Admincreatecategory','AdminController::createCategory');
$routes->add('Admincreatesubcategory','AdminController::createSubCategory');
$routes->add('Admincreateproduct','AdminController::createProduct');
$routes->add('Adminedituser','AdminController::editUser');
$routes->add('Admineditsubcategory','AdminController::editSubCategory');
$routes->add('useredit-(:num)','AdminController::editSingleUser/$1');
$routes->add('userdelete-(:num)','AdminController::deleteUser/$1');
$routes->add('subcategoryedit-(:num)','AdminController::editSingleSubcategory/$1');
$routes->add('subcategorydelete-(:num)','AdminController::deleteSubcategory/$1');
$routes->add('showcategory-(:num)','User::displaySubcategories/$1');
$routes->add('showsubcategory-(:num)','User::displayProducts/$1');
$routes->add('showsingle-(:num)','User::showProduct/$1');
$routes->add('createorder','User::createOrder');
//$routes->get('','User::show/$1');
//$routes->get('/processLogin','User::processLogin');
//$routes->get('homepage.php','User/homepage');
//$routes->get('(:any)','User::show/$1');//Enables login to accept data, allows controller and method to change

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
