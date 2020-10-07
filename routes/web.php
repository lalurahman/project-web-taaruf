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

Route::prefix('admin')
    // ->middleware(['auth','admin'])
    ->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/akhwat', 'Admin\AkhwatController@index')->name('daftar-akhwat');    
});

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/profile', 'AccountController@index')->name('profile');

Auth::routes();

