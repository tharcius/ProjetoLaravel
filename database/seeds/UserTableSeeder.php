<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \ProjetoX\Entities\User::truncate();
        factory(\ProjetoX\Entities\User::class, 3)->create();

    }
}
