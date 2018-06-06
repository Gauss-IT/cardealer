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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CarController@root_index')->name('root.index');

Route::get('/admin/cars/all', 'CarController@list')->name('cars.list');

Route::get('/admin/brands', 'BrandsController@index')->name('brands.index');

Route::post('/admin/brands', 'BrandsController@store')->name('brands.store');

Route::post('/admin/brands/{id}', 'BrandsController@update')->name('brands.update');

Route::get('/cars/{id}', 'CarController@show')->name('cars.show');

Route::post('/cars/duplicate/{id}', 'CarController@duplicate')->name('cars.duplicate');

Route::get('/cars', 'CarController@index')->name('cars.index');
Route::get('/carsL2', 'CarController@indexL2')->name('cars.index2');


Route::get('/cars/edit/{id}', 'CarController@edit')->name('cars.edit');

Route::post('/cars/edit/{id}', 'CarController@update')->name('cars.update');

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::post('/cars', 'CarController@store')->name('cars.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/cars/delete/{id}', 'CarController@destroy')->name('cars.delete');

Route::post('/admin/brands/delete/{id}', 'BrandsController@destroy')->name('brands.delete');
