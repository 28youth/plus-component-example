<?php

namespace Zhiyi\Component\ZhiyiPlus\PlusComponentExample;

use Zhiyi\Plus\Support\PackageHandler;

class ExamplePackageHandler extends PackageHandler 
{
	public function resolveHandle($command) 
	{
		// publish public assets
        $command->call('vendor:publish', [
            '--provider' => ExampleServiceProvider::class,
            '--tag' => 'public',
            '--force' => true,
        ]);		

		// Run the database migrations
        $command->call('migrate');        

		if ($command->confirm('Run seeder')) {
            // Run the database seeds.
            $command->call('db:seed', [
                '--class' => \DatabaseSeeder::class,
            ]);
        }        

		// $command->info('example');
	}

}
