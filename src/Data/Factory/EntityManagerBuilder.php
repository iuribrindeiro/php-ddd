<?php

namespace Data\Factory;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 29/01/2018
 * Time: 22:37
 */

class EntityManagerBuilder
{
    private function __construct()
    {
    }

    public static function create(): EntityManager {
        $config = Setup::createXMLMetadataConfiguration(["../Mappings/"], true);
        $conn = array(
            'dbname' => 'erp_admin',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'port' => '3306',
            'driver' => 'pdo_mysql',
        );

        return EntityManager::create($conn, $config);
    }
}