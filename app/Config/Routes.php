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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/dashboard/', 'Dashboard::index');
$routes->get('/dashboard/index2', 'Dashboard::index2');
$routes->get('/widgets/', 'Widgets::index');
$routes->get('/tables/simple/', 'Tables::simple');
$routes->get('/pages/profile/', 'Pages::profile');

$routes->get('/dashboard/tinh/', 'Tinh::index');
$routes->get('/dashboard/tinh/themtinh', 'Tinh::themTinh');
$routes->get('/dashboard/tinh/themtinh/them', 'Tinh::them_Tinh');
$routes->get('/dashboard/quan-huyen/', 'Huyen::index');
$routes->get('/dashboard/phuong-xa/', 'Xa::index');
$routes->get('/dashboard/dan-toc/', 'Dantoc::index');
$routes->get('/dashboard/ton-giao/', 'Tongiao::index');
$routes->get('/dashboard/quoc-tich/', 'Quoctich::index');
$routes->get('/dashboard/khu-vuc/', 'Khuvuc::index');
$routes->get('/dashboard/doi-tuong-dao-tao/', 'Doituongdt::index');
$routes->get('/dashboard/doi-tuong-tuyen-sinh/', 'Doituongts::index');
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
