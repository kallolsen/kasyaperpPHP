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
	return View::make('home');
});

Route::get('/mis', function()
{
	return View::make('mis');
});

Route::get('/accounts', function()
{
	return View::make('accounts');
});

Route::get('/sales', function()
{
	return View::make('sales');
});

Route::get('/admin', function()
{
	return View::make('admin');
});
