<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \ProjetoX\Entities\Project::truncate();
        factory(\ProjetoX\Entities\Project::class, 30)->create();
    }
}
