<?php

namespace ProjetoX\Http\Controllers;

use Illuminate\Http\Request;
use ProjetoX\Repositories\ProjectTaskRepository;
use ProjetoX\Services\ProjectTaskService;

class ProjectTaskController extends Controller
{
    /**
     * @var ProjectTaskRepository
     */
    protected $repository;

    /**
     * @var ProjectTaskService
     */
    protected $service;

    /**
     * ProjectTaskController constructor.
     * @param ProjectTaskRepository $repository
     * @param ProjectTaskService $service
     */
    public function __construct(ProjectTaskRepository $repository, ProjectTaskService $service){
        $this->repository = $repository;
        $this->service = $service;
    }


    public function store(Request $request){
        return $this->service->create($request->all());
    }

    public function show($id, $taskId){
        return $this->service->show($taskId);
    }

    public function update(Request $request, $id, $taskId){
        return $this->service->update($request->all(), $taskId);
    }

    public function destroy($id, $taskId){
        return $this->service->destroy($taskId);
    }

    public function tasks($id){
        return $this->service->tasks($id);
    }
}
