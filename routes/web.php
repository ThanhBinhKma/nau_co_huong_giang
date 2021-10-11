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
Route::get('thuc-don-co', 'Client\HomeController@menu')->name('client.menu');
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


    Route::get('/menu', 'MenuController@index')->name('menu.index');
    Route::get('menu/create', 'MenuController@create')->name('menu.create');
    Route::post('menu/store', 'MenuController@store')->name('menu.store');
    Route::delete('menu/destroy', 'MenuController@destroy')->name('menu.destroy');
    Route::delete('menu/destroyAll', 'MenuController@destroyAll')->name('menu.destroyAll');
    Route::get('menu/{id}', 'MenuController@edit')->name('menu.edit');
    Route::post('menu/{id}', 'MenuController@update')->name('menu.update');

    Route::get('/food-type', 'FoodTypeController@index')->name('food_type.index');
    Route::get('food-type/create', 'FoodTypeController@create')->name('food_type.create');
    Route::post('food-type/store', 'FoodTypeController@store')->name('food_type.store');
    Route::delete('food-type/destroy', 'FoodTypeController@destroy')->name('food_type.destroy');
    Route::delete('food-type/destroyAll', 'FoodTypeController@destroyAll')->name('food_type.destroyAll');
    Route::get('food-type/{id}', 'FoodTypeController@edit')->name('food_type.edit');
    Route::post('food-type/{id}', 'FoodTypeController@update')->name('food_type.update');

    Route::get('/foods', 'FoodController@index')->name('foods.index');
    Route::get('foods/create', 'FoodController@create')->name('foods.create');
    Route::post('foods/store', 'FoodController@store')->name('foods.store');
    Route::delete('foods/destroy', 'FoodController@destroy')->name('foods.destroy');
    Route::delete('foods/destroyAll', 'FoodController@destroyAll')->name('foods.destroyAll');
    Route::get('foods/{id}', 'FoodController@edit')->name('foods.edit');
    Route::post('foods/{id}', 'FoodController@update')->name('foods.update');

    Route::delete('subfoods/{id}', 'FoodController@deleteSubFood')->name('subfood.delete');

    Route::post('ckeditor/upload', 'ServiceController@upload')->name('ckeditor.upload');

});
