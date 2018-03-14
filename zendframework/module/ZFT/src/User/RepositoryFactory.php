<?php

namespace ZFT\User;

use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZFT\User\Repository;

class RepositoryFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $serviceManager, $requestedName, array $options = null)
    {
        $identityMap = $serviceManager->get(MemoryIdentityMap::class);
        $dataMap = $serviceManager->get(PostgresDataMapper::class);
        return new Repository($identityMap, $dataMap);
    }
}
