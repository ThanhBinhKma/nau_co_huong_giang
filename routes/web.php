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
Route::post('images-delete', 'Admin\HomeController@deleteImage')->name('images-delete');
Route::post('images-save', 'Admin\HomeController@saveImage')->name('images-save');

Route::get('/', 'Client\HomeController@index')->name('client.home');
Route::get('/gioi-thieu', 'Client\HomeController@about')->name('client.about');
Route::get('thuc-don', 'Client\HomeController@menu')->name('client.menu');
Route::get('mon-ngon', 'Client\HomeController@deliciousFoods')->name('client.deliciou_foods');
Route::get('lien-he', 'Client\HomeController@contact')->name('client.contact');
Route::get('dich-vu', 'Client\HomeController@service')->name('client.service');

Route::get('admin-login', 'Admin\LoginController@index')->name('admin.login.index');
Route::post('admin-login', 'Admin\LoginController@login')->name('admin.handle.login');

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->name('system_admin.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('services/create', 'ServiceController@create')->name('services.create');
    Route::post('services/store', 'ServiceController@store')->name('services.store');
    Route::delete('services/destroy', 'ServiceController@destroy')->name('services.destroy');
    Route::delete('services/destroyAll', 'ServiceController@destroyAll')->name('services.destroyAll');
    Route::get('services/{id}', 'ServiceController@edit')->name('services.edit');
    Route::post('services/{id}', 'ServiceController@update')->name('services.update');


    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('services/create', 'ServiceController@create')->name('services.create');
    Route::post('services/store', 'ServiceController@store')->name('services.store');
    Route::delete('services/destroy', 'ServiceController@destroy')->name('services.destroy');
    Route::delete('services/destroyAll', 'ServiceController@destroyAll')->name('services.destroyAll');
    Route::get('services/{id}', 'ServiceController@edit')->name('services.edit');
    Route::post('services/{id}', 'ServiceController@update')->name('services.update');
});
