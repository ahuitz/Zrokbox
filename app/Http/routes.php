<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::when('*','csrf', ['post']);

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::controllers([

	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('home','HomeController@index');
Route::resource('/','FrontController');


route::group(['middleware'=>'auth'],function(){
	Route::resource('admin/categoria','CategoriaControlador');
	Route::resource('producto','ProductoControlador');
	Route::resource('admin/presentacion','PresentacionControlador');
	//Route::resource('admin/producto','WelcomeController');
	});
