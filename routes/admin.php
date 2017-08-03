<?php 

Route::group(['prefix' => 'example/admin'], function () {

	Route::any('/', 'ExampleController@example')->name('example:admin');
	
});