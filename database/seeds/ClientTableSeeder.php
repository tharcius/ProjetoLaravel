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
        \ProjetoX\Entities\Client::truncate();
        factory(\ProjetoX\Entities\Client::class, 30)->create();
    }
}
