<?php

namespace Zhiyicx\Component\ZhiyiPlus\PlusComponentExample;

use Zhiyi\Plus\Support\PackageHandler;

class ExamplePackageHandler extends PackageHandler
{
    public function exampleHandle($command)
    {
        $this->info('example');
    }
}
