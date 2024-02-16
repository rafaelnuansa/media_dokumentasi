<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('sitemap', 'Sitemap::index');

// COJ //
$routes->get('coj', 'Coj::index');

// video //
$routes->get('video', 'Video::index');

// Files User //
$routes->get('files', 'Files::index');
$routes->get('files/(:segment)', 'Files::detail/$1');
$routes->get('files/download/(:segment)', 'Files::download/$1');

// Files User //
$routes->get('files-mitra', 'FilesMitra::index');
$routes->get('files-mitra/(:segment)', 'FilesMitra::detail/$1');
$routes->get('files-mitra/download/(:segment)', 'FilesMitra::download/$1');

// Auth routes
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/valid-register', 'Auth::valid_register');
$routes->post('auth/valid-login', 'Auth::valid_login');
$routes->get('auth/logout', 'Auth::logout');

// Page User
$routes->get('profile', 'Profile::index');
$routes->post('profile/update-password', 'Profile::updatePassword');
$routes->get('history', 'History::index');
$routes->get('kontak', 'Kontak::index');


// Metode Youtube //
$routes->get('admin/youtube', 'Admin\Youtube::index');
$routes->post('admin/youtube/create', 'Admin\Youtube::create');
$routes->get('admin/youtube/hapus/(:segment)', 'Admin\Youtube::delete/$1');


// Metode COJ //
$routes->get('admin/coj', 'Admin\Coj::index');
$routes->post('admin/coj/create', 'Admin\Coj::create');
$routes->get('admin/coj/hapus/(:segment)', 'Admin\Coj::delete/$1');


// ADMIN //
// Page Admin
$routes->get('admin', 'Admin\Admin::index');
$routes->get('admin/settings-web', 'Admin\SettingsWeb::index');
$routes->post('admin/settings-web/update', 'Admin\SettingsWeb::update');

// Images Dokument //
$routes->get('admin/files', 'Admin\Files::index');
$routes->get('admin/files/create', 'Admin\Files::create');
$routes->post('admin/files/store', 'Admin\Files::store');
$routes->get('admin/files/edit/(:num)', 'Admin\Files::edit/$1');
$routes->get('admin/files/detail/(:segment)', 'Admin\Files::detail/$1');
$routes->post('admin/files/update/(:num)', 'Admin\Files::update/$1');
$routes->get('admin/files/hapus/(:num)', 'Admin\Files::delete/$1');
$routes->get('admin/files/publish/(:num)', 'Admin\Files::publish/$1');
$routes->get('admin/files/unpublish/(:num)', 'Admin\Files::unpublish/$1');
$routes->get('admin/files/download/(:num)', 'Admin\Files::download/$1');


// Images Dokument mitra//
// $routes->get('admin/files-mitra', 'Admin\FilesMitra::index');
// $routes->get('admin/files-mitra/create', 'Admin\FilesMitra::create');
// $routes->post('admin/files-mitra/store', 'Admin\FilesMitra::store');
// $routes->get('admin/files-mitra/edit/(:num)', 'Admin\FilesMitra::edit/$1');
// $routes->get('admin/files-mitra/detail/(:segment)', 'Admin\FilesMitra::detail/$1');
// $routes->post('admin/files-mitra/update/(:num)', 'Admin\FilesMitra::update/$1');
// $routes->get('admin/files-mitra/hapus/(:num)', 'Admin\FilesMitra::delete/$1');
// $routes->get('admin/files-mitra/publish/(:num)', 'Admin\FilesMitra::publish/$1');
// $routes->get('admin/files-mitra/unpublish/(:num)', 'Admin\FilesMitra::unpublish/$1');
// $routes->get('admin/files-mitra/download/(:num)', 'Admin\FilesMitra::download/$1');

// User //
$routes->get('admin/user', 'Admin\User::index');
$routes->post('admin/user/create/(:num)', 'Admin\User::create/$1');
$routes->post('admin/user/edit/(:num)', 'Admin\User::edit/$1');
$routes->get('admin/user/hapus/(:num)', 'Admin\User::delete/$1');


$routes->get('admin/gallery', 'Admin\GalleryController::index');
// Rute untuk menampilkan formulir pembuatan galeri
$routes->get('admin/gallery/create', 'Admin\GalleryController::create');

// Rute untuk menangani penyimpanan data baru dari formulir
$routes->post('admin/gallery/store', 'Admin\GalleryController::store');

// Rute untuk menampilkan formulir edit galeri
$routes->get('admin/gallery/edit/(:num)', 'Admin\GalleryController::edit/$1');

// Rute untuk menangani pembaruan data dari formulir edit
$routes->post('admin/gallery/update/(:num)', 'Admin\GalleryController::update/$1');

// Rute untuk menangani penghapusan galeri
$routes->get('admin/gallery/delete/(:num)', 'Admin\GalleryController::delete/$1');

// Show galeri beserta gambar-gambarnya
$routes->get('admin/gallery/show/(:num)', 'Admin\GalleryController::show/$1');

// Tambah gambar ke galeri
$routes->post('admin/gallery/addImageGallery/(:num)', 'Admin\GalleryController::addImageGallery/$1');

// Hapus gambar dari galeri
$routes->delete('admin/gallery/deleteImageGallery/(:num)/(:num)', 'Admin\GalleryController::deleteImageGallery/$1/$2');
