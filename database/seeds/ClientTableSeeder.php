<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \ProjetoX\Client::truncate();
        factory(\ProjetoX\Client::class, 30)->create();
    }
}
