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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// rutas de materias
Route::get('/materias', 'MateriasController@index')->name('materias');
Route::post('/materias/add', 'MateriasController@store')->name('materias.store');
Route::get('/materias/{id}/edit', 'MateriasController@edit')->name('materias.edit');
Route::put('/materias/{id}/update', 'MateriasController@update')->name('materias.update');
Route::delete('/materias/{materia}','MateriasController@delete')->name('materia.destroy');

Route::get('/salones', 'SalonesController@index')->name('salones');
Route::post('/salones/add', 'SalonesController@store')->name('salones.store');
Route::get('/salones/{id}/edit', 'SalonesController@edit')->name('salones.edit');
Route::put('/salones/{id}/update', 'SalonesController@update')->name('salones.update');