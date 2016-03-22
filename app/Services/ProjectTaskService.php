<?php
/**
 * Created by PhpStorm.
 * User: tharcius
 * Date: 27/02/16
 * Time: 17:44
 */

namespace ProjetoX\Services;

use Prettus\Validator\Exceptions\ValidatorException;
use ProjetoX\Repositories\ProjectRepository;
use ProjetoX\Repositories\ProjectTaskRepository;
use ProjetoX\Validators\ProjectTaskValidator;
use ProjetoX\Validators\ProjectValidator;

class ProjectTaskService
{
    /**
     * @var ProjectTaskRepository
     */
    protected $repository;

    /**
     * @var ProjectTaskValidator
     */
    protected $validator;

    /**
     * ProjectTaskService constructor.
     * @param ProjectTaskRepository $repository
     * @param ProjectTaskValidator $validator
     */
    public function __construct(ProjectTaskRepository $repository, ProjectTaskValidator $validator){
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data){
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        } catch(ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function show($id){
        try{
            return $this->repository->find($id);
        } catch (\Exception $e){
            return [
                'error'=>true,
                'message'=>$e->getMessage()
            ];
        }
    }

    public function update($data, $id){
        try{
            $dados = $this->repository->update($data, $id);
            if($dados){
                $response_array = array('status' => 'success', 'client'=>$dados);
            }else{
                $response_array['status'] = 'error';
            }
            return $response_array;
        } catch (\Exception $e){
            return [
                'error'=>true,
                'message'=>$e->getMessage()
            ];
        }
    }

    public function destroy($id){
        try{
            $this->repository->find($id)->delete() ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
            return json_encode($response_array);
        } catch (\Exception $e){
            return [
                'error'=>true,
                'message'=>$e->getMessage()
            ];
        }
    }
}