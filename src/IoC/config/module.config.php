<?php

namespace IoC;

use Doctrine\ORM\EntityManager;
use IoC\CustonFactories\EntityManagerFactory;

return [
    'service_manager' => [
        'factories' => [
            EntityManager::class => EntityManagerFactory::class
        ]
    ]
];