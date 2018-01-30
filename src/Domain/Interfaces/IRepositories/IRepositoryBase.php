<?php

namespace Domain\Interfaces\IRepositories;
use Domain\Model\Base\BaseEntity;
use Domain\Model\Base\BaseEntityCollection;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 26/01/2018
 * Time: 21:56
 */

interface IRepositoryBase
{
    public function create(BaseEntity $baseEntity): BaseEntity;

    public function update(BaseEntity $baseEntity): BaseEntity;

    public function delete(BaseEntity $baseEntity): void;

    public function get(int $id): BaseEntity;

    public function list(): BaseEntityCollection;

    public function listPerPage(int $take, int $skip, string $textField): BaseEntityCollection;
}