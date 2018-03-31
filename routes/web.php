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

//CATALOGO DE MODELOS
Route::get('/modelo', 'CatModeloController@index')->name('modelo.index');
Route::get('/modelo/create', 'CatModeloController@create')->name('modelo.create');
Route::post('/modelo/store', 'CatModeloController@store')->name('modelo.store');
Route::get('/modelo/{modelo}/edit', 'CatModeloController@edit')->name('modelo.edit');
Route::put('/modelo/{modelo}', 'CatModeloController@update')->name('modelo.update');
Route::delete('/modelo/{modelo}', 'CatModeloController@destroy')->name('modelo.destroy');
