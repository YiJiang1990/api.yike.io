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

        $arr = [
            ['title' => '医学','description' => 'description'],
            ['title' => '心血管','node_id' => 1,'description' => 'description']
        ];
        \App\Node::insert($arr);
    }
}
