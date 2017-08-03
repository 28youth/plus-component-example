<?php 

use Illuminate\Support\Facades\Route;

Route::group(
	[
		'middleware' => ['web'],
		'namespace' => 'Zhiyi\\Component\\ZhiyiPlus\\PlusComponentExample\\Controllers',
	],
	__DIR__.'/routes/web.php'
);

Route::group(
	[
		'middleware' => ['web', 'auth', 'admin'],
		'namespace' => 'Zhiyi\\Component\\ZhiyiPlus\\PlusComponentExample\\AdminContaollers',
	],
	__DIR__.'/routes/admin.php'
);