<?php
namespace IoC\CustonFactories;

use Data\Factory\EntityManagerBuilder;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 29/01/2018
 * Time: 23:17
 */

class EntityManagerFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  \Interop\Container\ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws \Zend\ServiceManager\Exception\ServiceNotFoundException if unable to resolve the service.
     * @throws \Zend\ServiceManager\Exception\ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws \Interop\Container\Exception\ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return EntityManagerBuilder::create();
    }
}