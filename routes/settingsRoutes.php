<?php  

Route::group(['prefix' => 'settings','middleware' => 'userAuth'], function() {

	Route::get('/setup',[
	'as' =>'settings.setup',
	'uses' =>'SettingsController@setup'
]);

});
