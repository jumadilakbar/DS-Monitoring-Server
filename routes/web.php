<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
// Punya ADMIN
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
// ADMIN USER
Route::get('/admin/user', 'UserController@index')->name('admin')->middleware('admin');
Route::get('/admin/user/tambah', 'UserController@tambah')->name('admin')->middleware('admin');
Route::post('/admin/user/store','UserController@store')->name('admin')->middleware('admin');
Route::get('/admin/user/edit/{id}','UserController@edit')->name('admin')->middleware('admin');
Route::post('/admin/user/update','UserController@update')->name('admin')->middleware('admin');
Route::get('/admin/user/hapus/{id}','UserController@hapus')->name('admin')->middleware('admin');

// ADMIN REPORT
Route::get('/admin/report', 'ReportController@index')->name('admin')->middleware('admin');

// ADMIN HOST
Route::get('/admin/host', 'HostController@index')->name('admin')->middleware('admin');
Route::get('/admin/host/tambah', 'HostController@tambah')->name('admin')->middleware('admin');
Route::post('/admin/host/store','HostController@store')->name('admin')->middleware('admin');
Route::get('/admin/host/edit/{id_host}','HostController@edit')->name('admin')->middleware('admin');
Route::post('/admin/host/update','HostController@update')->name('admin')->middleware('admin');
Route::get('/admin/host/detail/{id_host}','HostController@detail')->name('admin')->middleware('admin');
Route::get('/admin/host/hapus/{id_host}','HostController@hapus')->name('admin')->middleware('admin');

// ADMIN Notifikasi
Route::get('/admin/notifikasi', 'NotifikasiController@index')->name('admin')->middleware('admin');
Route::get('/admin/notifikasi/tambah', 'NotifikasiController@tambah')->name('admin')->middleware('admin');
Route::post('/admin/notifikasi/store','NotifikasiController@store')->name('admin')->middleware('admin');
Route::get('/admin/notifikasi/edit/{id_notifkasi}','NotifikasiController@edit')->name('admin')->middleware('admin');
Route::post('/admin/notifikasi/update','NotifikasiController@update')->name('admin')->middleware('admin');
Route::get('/admin/notifikasi/detail/{id_notifkasi}','NotifikasiController@detail')->name('admin')->middleware('admin');
Route::get('/admin/notifikasi/hapus/{id_notifkasi}','NotifikasiController@hapus')->name('admin')->middleware('admin');

// Punya Pegawai
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai')->middleware('pegawai');
// Pegawai Host
Route::get('/pegawai/host', 'HostController@index_pegawai')->name('pegawai')->middleware('pegawai');
// Pegawai notifikasi
Route::get('/pegawai/notifikasi', 'NotifikasiController@index_pegawai')->name('pegawai')->middleware('pegawai');
// Pegawai report
Route::get('/pegawai/report', 'ReportController@index_pegawai')->name('pegawai')->middleware('pegawai');

Route::get('/scout', 'ScoutController@index')->name('scout')->middleware('scout');
Route::get('/team', 'TeamController@index')->name('team')->middleware('team');
Route::get('/academy', 'AcademicController@index')->name('academy')->middleware('academy');
// Route::get('/home', 'AcademicController@index')->name('home');