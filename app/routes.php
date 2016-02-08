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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/producto', function()
{
	$products=Product::paginate(10);
	return View::make('index')->with('products',$products);
});

Route::resource('products', 'DataController');
Route::get('api/producto', array('as'=>'api.producto', 'uses'=>'DataController@getDatatable'));
