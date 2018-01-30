<?php
/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 30/01/2018
 * Time: 21:20
 */

namespace Domain\Exceptions\DatabaseExceptions;

use Domain\Exceptions\KiiException;

class EntityCouldNotBeDeletedException extends KiiException
{
    protected $errorMessage = "Erro ao remover registros do banco de dados";

    public function __construct(\Exception $exception)
    {
        parent::__construct($exception);
    }
}