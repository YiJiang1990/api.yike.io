<?php

use Illuminate\Database\Seeder;

class NodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arr = ['threads_count' => 0,'subscribers_count' => 0];


        $insert = [
            ['title' => '医学','description' => 'description', 'cache' => json_encode($arr)],
            ['title' => '心血管','description' => 'description', 'cache' => json_encode($arr)]
        ];
        \App\Node::insert($insert);
    }
}
