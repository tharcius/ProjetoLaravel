<?php

namespace ProjetoX\Http\Controllers;

use ProjetoX\Entities\Client;
use ProjetoX\Repositories\ClientRepository;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * ClientController constructor.
     * @param ClientRepository $repository
     */
    public function __construct(ClientRepository $repository){
        $this->repository = $repository;
    }

    public function index(){
        return $this->repository->all();
    }

    public function store(Request $request){
        return $this->repository->create($request->all());
    }

    public function show($id){
        return $this->repository->find($id);
    }

    public function destroy($id){
        $this->repository->findOrNew($id)->delete() ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
        return json_encode($response_array);
    }

    public function update(Request $request, $id){
        $this->repository->update($request->all(), $id) ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
        return json_encode($response_array);
    }
}
