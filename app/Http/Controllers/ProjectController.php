<?php

namespace ProjetoX\Http\Controllers;

use Illuminate\Http\Request;
use ProjetoX\Repositories\ProjectRepository;
use ProjetoX\Services\ProjectService;

class ProjectController extends Controller
{
    /**
     * @var ProjectRepository
     */
    protected $repository;

    /**
     * @var ProjectService
     */
    protected $service;

    /**
     * ProjectController constructor.
     * @param ProjectRepository $repository
     */
    public function __construct(ProjectRepository $repository, ProjectService $service){
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(){
        return $this->repository->with(['client','owner'])->all();
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
