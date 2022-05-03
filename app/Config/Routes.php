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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

/*
    LANDING_PAGE
*/
$routes->add('riset/1', 'Home::riset1');
$routes->add('riset/2', 'Home::riset2');
$routes->add('riset/3', 'Home::riset3');
$routes->add('riset/4', 'Home::riset4');
$routes->add('riset/5', 'Home::riset5');
$routes->add('umum', 'Home::umum');

/*
    LOGIN
*/
$routes->add('login', 'Auth::index');

/*
    DIREKTORI
*/
// Direktori Riset 3
$routes->add('/riset/3/direktori/', 'Direktori::index');

/*
    DASHBOARD
*/
// Dashboard Riset 1
$routes->get('/riset/1/dashboard', 'Riset1::index');
$routes->get('/riset/1/dashboard/kajian1', 'Riset1::kajian1');
$routes->add('/riset/1/dashboard/kajian2', 'Riset1::kajian2'); 
$routes->get('/riset/1/dashboard/peta1', 'Riset1::peta1');
$routes->add('/riset/1/dashboard/peta2', 'Riset1::peta2');
$routes->get('/riset/1/dashboard/tabeldinamis', 'Riset1::tabeldinamis');
$routes->get('/riset/1/dashboard/tentangRiset1', 'Riset1::tentangRiset1');

// Dashboard Riset 2
$routes->add('/riset/2/dashboard', 'Riset2::index');
$routes->add('/riset/2/dashboard/kajian1', 'Riset2::kajian1'); 
$routes->add('/riset/2/dashboard/kajian2', 'Riset2::kajian2'); 
$routes->add('/riset/2/dashboard/peta1', 'Riset2::peta1');
$routes->add('/riset/2/dashboard/peta2', 'Riset2::peta2');
$routes->add('/riset/2/dashboard/tabeldinamis', 'Riset2::tabeldinamis');

// Dashboard Riset 3
$routes->add('/riset/3/dashboard', 'Riset3::index');
$routes->add('/riset/3/dashboard/kajian1', 'Riset3::kajian1'); 
$routes->add('/riset/3/dashboard/kajian2', 'Riset3::kajian2'); 
$routes->add('/riset/3/dashboard/peta1', 'Riset3::peta1');
$routes->add('/riset/3/dashboard/peta2', 'Riset3::peta2');
$routes->add('/riset/3/dashboard/tabeldinamis', 'Riset3::tabeldinamis');

// Dashboard Riset 4
$routes->add('/riset/4/dashboard', 'Riset4::index');
$routes->add('/riset/4/dashboard/kajian1', 'Riset4::kajian1'); 
$routes->add('/riset/4/dashboard/kajian2', 'Riset4::kajian2'); 
$routes->add('/riset/4/dashboard/peta1', 'Riset4::peta1');
$routes->add('/riset/4/dashboard/peta2', 'Riset4::peta2');
$routes->add('/riset/4/dashboard/tabeldinamis', 'Riset4::tabeldinamis');

// Dashboard Riset 5
$routes->add('/riset/5/dashboard', 'Riset5::index');
$routes->add('/riset/5/dashboard/kajian1', 'Riset5::kajian1'); 
$routes->add('/riset/5/dashboard/kajian2', 'Riset5::kajian2'); 
$routes->add('/riset/5/dashboard/peta1', 'Riset5::peta1');
$routes->add('/riset/5/dashboard/peta2', 'Riset5::peta2');
$routes->add('/riset/5/dashboard/tabeldinamis', 'Riset5::tabeldinamis');

// Dashboard Umum
$routes->add('/umum/dashboard', 'Umum::index');
$routes->add('/umum/dashboard/kajian1', 'Umum::kajian1'); 
$routes->add('/umum/dashboard/kajian2', 'Umum::kajian2'); 
$routes->add('/umum/dashboard/peta1', 'Umum::peta1');
$routes->add('/umum/dashboard/peta2', 'Umum::peta2');
$routes->add('/umum/dashboard/tabeldinamis', 'Umum::tabeldinamis');


// Dashboard
$routes->get('/(:alphanum)/dashboard', 'Dashboard::index/$1');
$routes->get('/(:alphanum)/dashboard/(:alphanum)', 'Dashboard::page/$1/$2');
$routes->get('/(:alphanum)/dashboard/(:alphanum)/(:alphanum)', 'Dashboard::peta/$1/$2/$3');

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
