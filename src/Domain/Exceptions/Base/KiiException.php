<?php

namespace Domain\Exceptions;

use Throwable;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 30/01/2018
 * Time: 21:04
 */

class KiiException extends \Exception
{
    protected $errorMessage = "Ocorreu um erro interno. O caso será analisado e logo será resolvido. Nos desculpe o transtorno.";

    public function __construct(\Exception $exception)
    {
        parent::__construct($this->errorMessage, $exception->getCode(), $exception);
    }
}