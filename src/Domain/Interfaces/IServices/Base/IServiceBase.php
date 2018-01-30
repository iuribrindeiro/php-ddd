<?php

namespace Domain\Interfaces\IServices;
use Domain\Model\Base\BaseEntity;
use Domain\Model\Base\BaseEntityCollection;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 26/01/2018
 * Time: 20:59
 */

interface IServiceBase
{
    public function create(BaseEntity $baseEntity): void;

    public function update(BaseEntity $baseEntity): void;

    public function delete(BaseEntity $baseEntity): void;

    public function get(int $id): BaseEntity;

    public function list(): BaseEntityCollection;

    public function listPerPage(int $take, int $skip, string $textField): BaseEntityCollection;
}