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
use ProjetoX\Validators\ProjectValidator;

class ProjectService
{
    /**
     * @var ProjectRepository
     */
    protected $repository;

    /**
     * @var ProjectValidator
     */
    protected $validator;

    /**
     * ProjectService constructor.
     * @param ProjectRepository $repository
     * @param ProjectValidator $validator
     */
    public function __construct(ProjectRepository $repository, ProjectValidator $validator){
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function show($id){
        try{
            return $this->repository->with(['client'])->with(['owner'])->find($id);
        } catch (\Exception $e){
            return [
                'error'=>true,
                'message'=>$e->getMessage()
            ];
        }
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

    public function update($data, $id){
        try{
            $this->repository->update($data, $id) ? $response_array['status'] = 'success' : $response_array['status'] = 'error';
            return json_encode($response_array);
        } catch (\Exception $e){
            return [
                'error'=>true,
                'message'=>$e->getMessage()
            ];
        }
    }
}