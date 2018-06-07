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

/*
	GET POST PUT DELETE RESOURCE
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function () {
    return view('home');
});

Route::get('inicio',function(){
	return view('inicio');
});

Route::get('login', function () {
    return view('login');
});

Route::group(['prefix' => 'admin'],function(){

	Route::resource('categorias','CategoriasController');
	Route::get('categorias/{id}/destroy', [
		'uses' => 'CategoriasController@destroy',
		'as' => 'admin.categorias.destroy'
	]);

	Route::resource('productos','ProductosController');

	Route::resource('proveedores','ProveedoresController');

	Route::resource('secciones','SeccionesController');

});