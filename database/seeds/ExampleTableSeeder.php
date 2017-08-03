<?php

use Illuminate\Database\Seeder;
use Zhiyi\Component\ZhiyiPlus\PlusComponentExample\Models\Example;

class ExampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createData();
    }

    /**
     * create example data.
     *
     * @return void
     */
    protected function createData()
    {
        Example::create(['name' => 'davie', 'example' => bcrypt('example')]);
    }
}
