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
	return View::make('hello');
});

Route::GET('/ficha', array(
	'as' => 'ficha',
	'uses' => 'FichaController@index'
));

Route::get('/ficha/listar/',array(
	'as' => 'lista',
	'uses' => 'FichaController@listar'

));

Route::POST('/ficha/guardar', array(
	'as' => 'ficha/guardar',
	'uses' => 'FichaController@store'
));
