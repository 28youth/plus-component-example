<?php

namespace Zhiyicx\Component\ZhiyiPlus\PlusComponentExample;

use Illuminate\Support\PackageHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\ManageRepository;
use Zhiyicx\Component\ZhiyiPlus\PlusComponentExample\ExamplePackageHandler;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the package.
     *
     * @return void
     */
    public function boot()
    {
        // 注入路由
        $this->routeMap();

        // 注册视图
        $this->loadViewsFrom(dirname(__DIR__).'/views/', 'example'); 

        // 注册资源文件
        $this->publishes([
            dirname(__DIR__).'/assets' => $this->app->PublicPath().'/zhiyicx/plus-component-example',
        ], 'public');

        // 注册数据库迁移
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // 注入处理器
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
            'icon' => 'Z', // Icon 为 Z 字符，修改成你需要的。
        ]);
    }

    /**
     * Register route.
     *
     * @return void
     */
    protected function routeMap()
    {
        $this->loadRoutesFrom(
            dirname(__DIR__).'/routes/web.php'
        );
    }    

}
