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

//Admin, está fora porque não vai cair no filtro auth
Route::Controller('admin/login', 'Admin\UserController');

//Admin
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::Resource('/configuration', 'Admin\ConfigurationController');
	Route::Controller('/', 'Admin\HomeController');
});


//Site
Route::Controller('/', 'Site\HomeController');
