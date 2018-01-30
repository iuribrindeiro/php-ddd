<?php

namespace IoC;

use Zend\ModuleManager\ModuleManager;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 29/01/2018
 * Time: 20:48
 */

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}