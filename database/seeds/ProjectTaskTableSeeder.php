<?php

use Illuminate\Database\Seeder;

class ProjectTaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \ProjetoX\Entities\ProjectTask::truncate();
        factory(\ProjetoX\Entities\ProjectTask::class, 100)->create();
    }
}
