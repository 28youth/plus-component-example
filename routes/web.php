<?php

Route::group(['prefix' => 'example/web'], function () {

	Route::any('/', 'ExampleController@example')->name('example:web');

});


