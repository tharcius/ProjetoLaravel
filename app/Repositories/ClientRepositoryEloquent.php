<?php
/**
 * Created by PhpStorm.
 * User: tharcius
 * Date: 27/02/16
 * Time: 00:54
 */

namespace ProjetoX\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use ProjetoX\Entities\Client;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository{

    public function model()
    {
        return Client::class;
    }
}