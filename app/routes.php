<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::GET('/', function()
{
	return View::make('home');
});

Route::GET('/mantenciones', array(
	'as' => 'mantenciones',
	'uses' => 'FichaController@listar'
));

/*Route::GET('/mantenciones', array(
	'as' => 'mantenciones',
	'uses' => 'MantencionController@index'
));*/

Route::GET('/servicios', array(
	'as' => 'servicios',
	'uses' => 'ServicioController@index'
));

Route::POST('/servicio/guarda', array(
	'as' => 'servicio/guarda',
	'uses' => 'ServicioController@create'
));

Route::GET('/servicio/elimina/{id}', array(
	'as' => 'servicio/elimina/id',
	'uses' => 'ServicioController@destroy'
));

Route::GET('/servicio/cargaServicio/{idArea}', array(
	'as' => 'cargaServicios',
	'uses' => 'ServicioController@cargaServicios'
));

Route::GET('/contratos', array(
	'as' => 'contratos',
	'uses' => 'ContratoController@index'
));


Route::GET('/contratos/nuevo', array(
	'as' => 'contratos/nuevo',
	'uses' => 'ContratoController@create'
));

Route::GET('/contratos/borrador/{idContrato}', array(
	'as' => 'contratos/borrador',
	'uses' => 'ContratoController@show'
));

Route::POST('/contratos/servicio/agregar', array(
	'as' => 'contratos/servicio/agregar',
	'uses' => 'ContratoController@store'
));

Route::GET('/ficha/listar/',array(
	'as' => 'lista',
	'uses' => 'FichaController@listar'

));

Route::POST('/ficha/guardar', array(
	'as' => 'ficha/guardar',
	'uses' => 'FichaController@store'
));

Route::POST('/ficha/agregar', array(
	'as' => 'ficha/agregar',
	'uses' => 'FichaController@store'
));

Route::GET('/ficha/cliente/{id}',array(
	'as' => 'cliente',
	'uses' => 'FichaController@pinta'
));