<?php
/**
 * Created by PhpStorm.
 * User: tharcius
 * Date: 27/02/16
 * Time: 08:27
 */

namespace ProjetoX\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use ProjetoX\Entities\Project;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository{

    public function model()
    {
        return Project::class;
    }
}