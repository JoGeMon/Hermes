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
	return View::make('index');
});

/*Route::GET('/mantenciones', $arrayName = array('' => , );(
	'as' => 'mantenciones',
	'uses' => 'MantencionController@index'
));*/

/* Rutas de login */
Route::POST('/login', array(
	'as' => 'login',
	'uses' => 'LoginController@index'
));

/* Rutas de servicio */
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
/*  Fin rutas de servicio */

/* Rutas de contratos */
Route::GET('/contratos', array(
	'as' => 'contratos',
	'uses' => 'ContratoController@index'
));


Route::GET('/contratos/nuevo', array(
	'as' => 'contratos/nuevo',
	'uses' => 'ContratoController@create'
));

Route::POST('/contratos/guardar', array(
	'as' => 'contratos/guardar',
	'uses' => 'ContratoController@store'
));

Route::GET('/contratos/muestra/{idContrato}', array(
	'as' => 'contratos/muestra',
	'uses' => 'ContratoController@show'
));

Route::GET('/contratos/detalles/{idContrato}', array(
	'as' => 'contratos/detalles',
	'uses' => 'ContratoController@showDetalles'
));

Route::POST('/contratos/servicio/agregar', array(
	'as' => 'contratos/servicio/agregar',
	'uses' => 'ContratoController@storeServicio'
));
/* Fin rutas de contrato */

/* Rutas de ficha */
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
/* Fin rutas de ficha*/

/* Rutas de atención */
Route::GET('/mantenciones', array(
	'as' => 'mantenciones',
	'uses' => 'AtencionController@index'
));

Route::GET('/mantenciones/propias', array(
	'as' => 'mantenciones/usuario/id',
	'uses' => 'AtencionController@misAtenciones'
));

Route::GET('/mantencion/equipo/{idAtencion}',array(
	'as' => 'mantencion/equipo',
	'uses' => 'AtencionController@getEquipo'
));

Route::GET('/atencion/equipo/add/{idAtencion}/{idEmpleado}',array(
	'as' => "mantencion/equipo/add",
	'uses' => 'AtencionController@addEmpleado'
));

Route::GET('/atencion/equipo/remove/{idAtencion}/{idEmpleado}',array(
	'as' => "mantencion/equipo/remove",
	'uses' => 'AtencionController@removeEmpleado'
));
/* Fin rutas de atencion*/

/* Rutas de emergencias */
Route::GET('/emergencia', array(
	'as' => 'emergencias',
	'uses' => 'EmergenciaController@index'
));

Route::POST('/emergencia/guardar', array(
	'as' => 'emergencia/guardar',
	'uses' => 'EmergenciaController@store'
));
/* Fin rutas de atencion*/

/* Rutas de panel */
Route::get('/dashboard',array(
	'as' => 'dashboard',
	'uses' => 'DashboardController@index'
));
/* Fin rutas de panel*/