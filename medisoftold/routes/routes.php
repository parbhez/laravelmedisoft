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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[
	'as' => '/',
	'uses' => 'LoginController@index'
]);

Route::get('/login',[
		'as' => '/login',
		'uses' => 'LoginController@index'
]);

Route::post('/login-Check',[
		'as' => '/login-Check.post',
		'uses' => 'LoginController@loginCheck'
]);


Route::group(['middleware' => 'userAuth'],function(){

	Route::get('/dashboard',[
	'as' => '/dashboard',
	'uses' => 'DashboardController@dashboard'
]);

	Route::get('/logout',[
		'as' => 'logout',
		'uses' => 'LoginController@logout'
	]);
});

