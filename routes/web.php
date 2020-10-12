<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@index')->name('cari-akhwat');
Route::get('/profile', 'AccountController@index')->name('profile');

Route::prefix('admin')
    // ->middleware(['auth','admin'])
    ->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/akhwat', 'Admin\AkhwatController@index')->name('daftar-akhwat');
    Route::get('/akhwat/create', 'Admin\AkhwatController@create')->name('tambah-akhwat');
    Route::get('/akhwat/10', 'Admin\AkhwatController@details')->name('details-akhwat');
    Route::get('/ikhwan', 'Admin\IkhwanController@index')->name('daftar-ikhwan');
    Route::get('/ikhwan/12', 'Admin\IkhwanController@details')->name('details-ikhwan');
    Route::get('/pasangan', 'Admin\PasanganController@index')->name('daftar-pasangan');
    Route::get('/pasangan/15', 'Admin\PasanganController@details')->name('details-pasangan');
    Route::get('/kriteria', 'Admin\KriteriaController@index')->name('daftar-kriteria');
});

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Auth::routes();

