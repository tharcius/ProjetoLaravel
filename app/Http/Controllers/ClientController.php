<?php

namespace ProjetoX\Http\Controllers;

use Illuminate\Http\Request;
use ProjetoX\Repositories\ClientRepository;
use ProjetoX\Services\ClientService;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * @var ClientService
     */
    private $service;

    /**
     * ClientController constructor.
     * @param ClientRepository $repository
     */
    public function __construct(ClientRepository $repository, ClientService $service){
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(){
        return $this->repository->all();
    }

    public function store(Request $request){
        return $this->service->create($request->all());
    }

    public function show($id){
        return $this->service->show($id);
    }

    public function destroy($id){
        return $this->service->destroy($id);
    }

    public function update(Request $request, $id){
        return $this->service->update($request->all(), $id);
    }
}
