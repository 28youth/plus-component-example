<?php

namespace Zhiyi\Component\ZhiyiPlus\PlusComponentExample\Seeds;

use Illuminate\Database\Seeder;

class ExampleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExampleTableSeeder::class);
    }
}
