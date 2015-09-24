<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 01/09/15
 * Time: 20:16
 */

namespace App\Services;


use App\Repositories\ProjectRepository;
use App\Validators\ProjectValidator;
use Prettus\Validator\Exceptions\ValidatorException;

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

    public function __construct(ProjectRepository $repository, ProjectValidator $validator)
    {
        $this->repository = $repository;

        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try{
            $this->validator->with($data)->passesOrFail();

            return $this->repository->create($data);

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

    }

    public function update(array $data, $id)
    {
        try{
            $this->validator->with($data)->passesOrFail();

            return $this->repository->update($data, $id);

        } catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function delete($id)
    {
        try{

            return $this->repository->delete($id);
        }catch (ValidatorException $e){

        }
    }

    public function find($id)
    {
        try{
            return $this->repository->find($id);

        }catch (ValidatorException $e){

        }
    }

}