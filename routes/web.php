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
Route::get('thuc-don-co/{slug}', 'Client\HomeController@menu')->name('client.menu');
Route::get('mon-ngon', 'Client\HomeController@deliciousFoods')->name('client.deliciou_foods');
Route::get('lien-he', 'Client\HomeController@contact')->name('client.contact');
Route::get('dich-vu/{id}', 'Client\HomeController@service')->name('client.service');

Route::get('admin-login', 'Admin\LoginController@index')->name('admin.login.index');
Route::post('admin-login', 'Admin\LoginController@login')->name('admin.handle.login');

Route::delete('delete-img', 'Admin\DashboardController@deleteImg')->name('admin.deleteImg');

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->name('system_admin.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('services/create', 'ServiceController@create')->name('services.create');
    Route::post('services/store', 'ServiceController@store')->name('services.store');
    Route::delete('services/destroy', 'ServiceController@destroy')->name('services.destroy');
    Route::delete('services/destroyAll', 'ServiceController@destroyAll')->name('services.destroyAll');
    Route::get('services/{id}', 'ServiceController@edit')->name('services.edit');
    Route::post('services/{id}', 'ServiceController@update')->name('services.update');


    Route::get('/menus', 'MenuController@index')->name('menus.index');
    Route::get('menus/create', 'MenuController@create')->name('menus.create');
    Route::post('menus/store', 'MenuController@store')->name('menus.store');
    Route::delete('menus/destroy', 'MenuController@destroy')->name('menus.destroy');
    Route::delete('menus/destroyAll', 'MenuController@destroyAll')->name('menus.destroyAll');
    Route::get('menus/{id}', 'MenuController@edit')->name('menus.edit');
    Route::post('menus/{id}', 'MenuController@update')->name('menus.update');

    Route::get('/foods', 'FoodController@index')->name('foods.index');
    Route::get('foods/create', 'FoodController@create')->name('foods.create');
    Route::post('foods/store', 'FoodController@store')->name('foods.store');
    Route::delete('foods/destroy', 'FoodController@destroy')->name('foods.destroy');
    Route::delete('foods/destroyAll', 'FoodController@destroyAll')->name('foods.destroyAll');
    Route::get('foods/{id}', 'FoodController@edit')->name('foods.edit');
    Route::post('foods/{id}', 'FoodController@update')->name('foods.update');

    Route::delete('subfoods/{id}', 'FoodController@deleteSubFood')->name('subfood.delete');
});
