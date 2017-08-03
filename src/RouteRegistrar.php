<?php

namespace Zhiyi\Component\ZhiyiPlus\PlusComponentExample;

use Illuminate\Contracts\Routing\Registrar as RouterContract;

class RouteRegistrar
{
    /**
     * The router implementation.
     *
     * @var \Illuminate\Contracts\Routing\Registrar
     */
    protected $router;

    /**
     * Create a new route registrar instance.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function __construct(RouterContract $router)
    {
        $this->router = $router;
    }

    /**
     * Register all.
     *
     * @return void
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function all()
    {
        $this->forAdmin();
        $this->forWeb();
    }

    /**
     * Register admin routes.
     *
     * @return void
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function forAdmin()
    {
        $this->router->group([
            'middleware' => ['web'],
            'prefix' => '/example/admin',
            'namespace' => 'Zhiyi\\Component\\ZhiyiPlus\\PlusComponentExample\\AdminContaollers',
        ], dirname(__DIR__).'/routes/admin.php');
    }

    /**
     * Register web routes
     * 
     * @return void
     */
    public function forWeb()
    {
    	$this->router->group([
    		'middleware' => ['web'],
    		'prefix' => '/example/web',
    		'namespace' => 'Zhiyi\\Component\\ZhiyiPlus\\PlusComponentExample\\Controllers',
    	], dirname(__DIR__).'/routes/web.php');
    }

}
