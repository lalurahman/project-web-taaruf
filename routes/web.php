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
Route::get('/', 'HomeController@index')->name('home');
Route::get('login', 'AuthUserController@login')->name('login');
Route::post('login', 'AuthUserController@getlogin');
Route::get('logout', 'AuthUserController@logout')->name('logout');

Route::get('register', 'AuthUserController@register')->name('register');
Route::post('register', 'AuthUserController@registerProcess')->name('register-process');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin:ADMIN']], function () {

    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/ikhwan', 'Admin\IkhwanController@index')->name('daftar-ikhwan');
    Route::get('/ikhwan/{id}', 'Admin\IkhwanController@details')->name('details-ikhwan');
    Route::put('/ikhwan/update', 'Admin\IkhwanController@update')->name('updated-ikhwan');
    Route::delete('/ikhwan/{id}', 'Admin\IkhwanController@destroy')->name('delete-ikhwan');

    Route::get('/pasangan', 'Admin\PasanganController@index')->name('daftar-pasangan');
    Route::get('/pasangan/15', 'Admin\PasanganController@details')->name('details-pasangan');
    Route::get('/kriteria', 'Admin\KriteriaController@index')->name('daftar-kriteria');
    Route::get('/cari-akhwat', 'DashboardController@index')->name('cari-akhwat');
    Route::get('/akhwat/details/{nama}', 'DashboardController@details')->name('details-calon');

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
        Route::get('/{nama}', 'Admin\AkhwatController@details')->name('details-akhwat');
        Route::get('/download-cv/{cv}', 'Admin\AkhwatController@download')->name('downloadcv');
        Route::put('/update', 'Admin\AkhwatController@update')->name('updatedAkhwat');
        Route::delete('/delete', 'Admin\AkhwatController@delete')->name('deleteAkhwat');
    });
});

Route::group(['prefix'=>'user', 'middleware' => ['auth', 'admin:USER']], function () {
    Route::get('/', 'AccountController@index')->name('profile');
    Route::put('/profile', 'AccountController@update')->name('profile-update');

});

// Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

// Auth::routes();

