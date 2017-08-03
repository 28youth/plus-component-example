<?php

namespace Zhiyi\Component\ZhiyiPlus\PlusComponentExample;

use Illuminate\Support\ServiceProvider;
use Zhiyi\Component\ZhiyiPlus\PlusComponentExample\ExamplePackageHandler;
use Zhiyi\Plus\Support\ManageRepository;
use Zhiyi\Plus\Support\PackageHandler;

class ExampleServiceProvider extends ServiceProvider 
{
	/**
	 * Bootstrap the package.
	 *
	 * @return void
	 */
	public function boot() 
	{
		// Register route.
		$this->loadRoutesFrom(dirname(__DIR__).'/router.php');

		// Load views.
		$this->loadViewsFrom(dirname(__DIR__).'/views', 'example');

		// Publish resource file.
		$this->publishes([
			dirname(__DIR__).'/assets' => $this->app->PublicPath().'/zhiyicx/plus-component-example',
		], 'public');

		// Register migration files.
        $this->loadMigrationsFrom([
            dirname(__DIR__).'/database/migrations',
        ]);

		// Register commands
        if ($this->app->runningInConsole()) {
	        $this->commands([
	            PackageTestCommand::class
	        ]);
	    }

		// Publish handler.
		PackageHandler::loadHandleFrom('example', ExamplePackageHandler::class);
	}

	/**
	 * Register the package service provider.
	 *
	 * @return void
	 */
	public function register() 
	{
		// 注入后台导航
		$this->app->make(ManageRepository::class)->loadManageFrom('example', 'example:admin', [
			'route' => true,
			'icon' => asset('zhiyicx/plus-component-example/example-icon.png'),
		]);
	}
}
