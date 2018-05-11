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

Route::get('/cars/{id}', 'CarController@show')->name('cars.show');

Route::get('/cars', 'CarController@index')->name('cars.index');

Route::get('/admin', function() {
  return view('admin/index');
})->name('admin.index');

Route::post('/cars', 'CarController@store')->name('cars.store');
