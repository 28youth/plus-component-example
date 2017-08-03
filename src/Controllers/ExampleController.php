<?php

namespace Zhiyi\Component\ZhiyiPlus\PlusComponentExample\Controllers;

use Zhiyi\Plus\Http\Controllers\Controller;

class ExampleController extends Controller 
{
	public function example() {
		return view('example::test');
	}
}
