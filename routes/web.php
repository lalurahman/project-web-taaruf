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

Route::group(['prefix' => 'admin', 'middleware' => ['level:admin','auth']], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    // Route::get('/akhwat', 'Admin\AkhwatController@index')->name('daftar-akhwat');
    // Route::get('/akhwat/create', 'Admin\AkhwatController@create')->name('tambah-akhwat');
    // Route::get('/akhwat/10', 'Admin\AkhwatController@details')->name('details-akhwat');
    Route::get('/ikhwan', 'Admin\IkhwanController@index')->name('daftar-ikhwan');
    Route::get('/ikhwan/12', 'Admin\IkhwanController@details')->name('details-ikhwan');
    Route::get('/pasangan', 'Admin\PasanganController@index')->name('daftar-pasangan');
    Route::get('/pasangan/15', 'Admin\PasanganController@details')->name('details-pasangan');
    Route::get('/kriteria', 'Admin\KriteriaController@index')->name('daftar-kriteria');

    Route::prefix('kriteria')->group(function(){
        Route::resource('keterampilan', 'Admin\Kriteria\KeterampilanController');
        Route::resource('suku', 'Admin\Kriteria\SukuController');
        Route::resource('tinggi', 'Admin\Kriteria\TinggiController');
        Route::resource('tubuh', 'Admin\Kriteria\TubuhController');
        Route::resource('organisasi', 'Admin\Kriteria\OrganisasiController');
        Route::resource('pendidikan', 'Admin\Kriteria\PendidikanController');
        Route::resource('rambut', 'Admin\Kriteria\RambutController');
        Route::resource('pekerjaan', 'Admin\Kriteria\PekerjaanController');
        Route::resource('kulit', 'Admin\Kriteria\KulitController');
        Route::resource('darah', 'Admin\Kriteria\DarahController');
        Route::resource('wajah', 'Admin\Kriteria\WajahController');
        Route::resource('nikah', 'Admin\Kriteria\NikahController');
    });

    Route::group(['prefix' => 'akhwat'], function () {
        Route::get('/', 'Admin\AkhwatController@index')->name('daftar-akhwat');
        Route::get('/create', 'Admin\AkhwatController@create')->name('tambah-akhwat');
        Route::post('/store', 'Admin\AkhwatController@store')->name('storeAkhwat');
        Route::get('/akhwat/Azizah-Nur-Safitri', 'Admin\AkhwatController@details')->name('details-akhwat');
    });
});

Route::group(['middleware' => ['level:user','auth']], function () {
    Route::get('/', 'DashboardController@index')->name('cari-akhwat');
    Route::get('/profile', 'AccountController@index')->name('profile');
});

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Auth::routes();

