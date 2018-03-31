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

Route::get('/adminl', function(){
	return view('template.main');
});

Route::get('/sucursal', 'catSucursalController@index')->name('suc.index');
Route::get('/sucursal/create', 'catSucursalController@create')->name('suc.create');
Route::post('/sucursal/store', 'catSucursalController@store')->name('suc.store');
Route::get('/sucursal/{sucursal}/edit', 'catSucursalController@edit')->name('suc.edit');
Route::put('/sucursal/{sucursal}', 'catSucursalController@update')->name('suc.update');
Route::delete('/sucursal/{sucursal}', 'catSucursalController@destroy')->name('suc.destroy');
//CATALOGO DE MODELOS
Route::get('/modelo', 'CatModeloController@index')->name('modelo.index');
Route::get('/modelo/create', 'CatModeloController@create')->name('modelo.create');
Route::post('/modelo/store', 'CatModeloController@store')->name('modelo.store');
Route::get('/modelo/{modelo}/edit', 'CatModeloController@edit')->name('modelo.edit');
Route::put('/modelo/{modelo}', 'CatModeloController@update')->name('modelo.update');
Route::delete('/modelo/{modelo}', 'CatModeloController@destroy')->name('modelo.destroy');
