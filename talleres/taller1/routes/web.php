<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/drones', 'App\Http\Controllers\DroneController@index')->name('drones.index');
Route::get('/drones/save', 'App\Http\Controllers\DroneController@store')->name('drones.store');
Route::get('/drones/create', 'App\Http\Controllers\DroneController@create')->name('drones.create');
Route::get('/drones/{id}', 'App\Http\Controllers\DroneController@show')->name('drones.show');
Route::delete('/drones/{id}', 'App\Http\Controllers\DroneController@destroy')->name('drones.destroy');
