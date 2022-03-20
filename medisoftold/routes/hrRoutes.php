<?php 

Route::group(['prefix' => 'hr', 'middleware' => 'userAuth'],function(){

	Route::get('index',[
		'as' => 'hr.index',
		'uses' => 'HRController@index'
	]);

	Route::group(['middleware' => 'hr-middleware'],function(){

		Route::get('/employee',[
				'as' => 'hr.employee',
				'uses' => 'HRController@employeeList'
			]);

	});
			


});