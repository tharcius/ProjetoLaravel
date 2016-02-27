<?php

namespace ProjetoX\Http\Controllers;

use Illuminate\Http\Request;
use ProjetoX\Http\Requests;
use ProjetoX\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    /**
     * @var ProjectRepository
     */
    protected $repository;

    /**
     * ProjectController constructor.
     * @param ProjectRepository $repository
     */
    public function __construct(ProjectRepository $repository){
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
        $this->repository->find($id)->delete() ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
        return json_encode($response_array);
    }

    public function update(Request $request, $id){
        $this->repository->update($request->all(), $id) ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
        return json_encode($response_array);
    }

}
