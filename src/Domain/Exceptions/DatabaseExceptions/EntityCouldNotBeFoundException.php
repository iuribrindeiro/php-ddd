<?php
/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 30/01/2018
 * Time: 21:22
 */

namespace Domain\Exceptions\DatabaseExceptions;

use Domain\Exceptions\KiiException;

class EntityCouldNotBeFoundException extends KiiException
{
    protected $errorMessage = "O registro não pôde ser encontrado.";

    public function __construct(\Exception $exception)
    {
        parent::__construct($exception);
    }
}