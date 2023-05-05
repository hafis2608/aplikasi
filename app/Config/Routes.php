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




$routes->get('create-db', function () {

    $forge = \Config\Database::forge();

    if ($forge->createDatabase('gym')) {
        echo 'Database created!';
    }
});


$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->post('registerProcess', 'Auth::registerProcess');

$routes->get('whatsapp', 'Whatsapp::index');
$routes->post('whatsapp/send', 'Whatsapp::send');

$routes->addRedirect('/', 'home');
$routes->presenter('user');
$routes->presenter('member');

$routes->presenter('trainer');
$routes->presenter('schedule');
$routes->presenter('membership');
$routes->resource('kelas');
$routes->presenter('kwitansi');
$routes->presenter('report');

$routes->resource('payment');
$routes->get('payment/cetak', 'Payment::cetak');
$routes->post('payment/kirim_ke_email', 'Payment::kirim_ke_email');
$routes->post('kelas/(.*)/validasi', 'Kelas::status');
$routes->post('kwitansi/(.*)/validasi', 'Kwitansi::status');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
