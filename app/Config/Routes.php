<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

$routes->get('mahasiswa', 'MahasiswaController::index');
$routes->add('mahasiswa', 'MahasiswaController::create');
//M. Zuhri Wijianto
$routes->add('mahasiswa/edit/(:segment)', 'MahasiswaController::edit/${id}');
$routes->get('mahasiswa/delete/(:segment)', 'MahasiswaController::delete/${id}');
//M. Zuhri Wijianto
// $routes->group('', ['filter' => 'login'], function($routes){
// $routes->get('dashboard', 'Home::dashboard');
// // $routes->get('mahasiswa', 'MahasiswaController::index');
// // $routes->add('mahasiswa', 'MahasiswaController::create');
// });

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
