<?php
/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 30/01/2018
 * Time: 21:12
 */

namespace Domain\Exceptions\DatabaseExceptions;

use Domain\Exceptions\KiiException;

class EntityCouldNotBeUpdatedException extends KiiException
{
    protected $errorMessage = "Erro ao atualizar registro no banco de dados.";

    public function __construct(\Exception $exception)
    {
        parent::__construct($exception);
    }
}