<?php

namespace Domain\Services;

use Domain\Exceptions\DatabaseExceptions\EntityCouldNotBeCreatedException;
use Domain\Exceptions\DatabaseExceptions\EntityCouldNotBeDeletedException;
use Domain\Exceptions\DatabaseExceptions\EntityCouldNotBeFoundException;
use Domain\Exceptions\DatabaseExceptions\EntityCouldNotBeUpdatedException;
use Domain\Exceptions\KiiException;
use Domain\Interfaces\IRepositories\IRepositoryBase;
use Domain\Interfaces\IServices\IServiceBase;
use Domain\Model\Base\BaseEntity;
use Domain\Model\Base\BaseEntityCollection;
use Herrera\Json\Exception\Exception;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 30/01/2018
 * Time: 21:00
 */

abstract class ServiceBase implements IServiceBase
{
    /**
     * @var IRepositoryBase
     */
    private $repository;

    public function __construct(IRepositoryBase $repository)
    {
        $this->repository = $repository;
    }

    public function create(BaseEntity $baseEntity): void{

        try {
            $this->repository->create($baseEntity);
        } catch (\Exception $exception) {
            throw new EntityCouldNotBeCreatedException($exception);
        }
    }

    public function update(BaseEntity $baseEntity): void {
        try {
            $this->repository->update($baseEntity);
        } catch (\Exception $exception) {
            throw new EntityCouldNotBeUpdatedException($exception);
        }
    }

    public function delete(BaseEntity $baseEntity): void {
        try {
            $this->repository->delete($baseEntity);
        } catch (\Exception $exception) {
            throw new EntityCouldNotBeDeletedException($exception);
        }
    }

    public function get(int $id): BaseEntity {
        try {
            return $this->repository->get($id);
        } catch (\Exception $exception) {
            throw new EntityCouldNotBeFoundException($exception);
        }
    }

    public function list(): BaseEntityCollection {
        try {
            return $this->repository->list();
        } catch (\Exception $exception) {
//            throw new
        }
    }

    public function listPerPage(int $take, int $skip, string $textField): BaseEntityCollection {

    }
}