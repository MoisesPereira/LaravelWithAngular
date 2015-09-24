<?php
/**
 * Created by PhpStorm.
 * User: moises
 * Date: 24/08/15
 * Time: 22:14
 */

namespace App\Services;


use App\Repositories\ClientRepository;
use App\Validators\ClientValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ClientService
{
    /**
     * @var ClientRepository
     */
    protected $repository;

    /**
     * @var ClientValidator
     */
    protected $validator;

    public function __construct(ClientRepository $repository, ClientValidator $validator)
    {
        $this->repository = $repository;

        $this->validator = $validator;
    }

    public function create(array $data)
    {

        try{
            $this->validator->with($data)->passesOrFail();

            return $this->repository->create($data);

        } catch (ValidatorException $e){
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