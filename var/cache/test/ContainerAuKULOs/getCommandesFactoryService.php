<?php

namespace ContainerAuKULOs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandesFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Factory\CommandesFactory' shared autowired service.
     *
     * @return \App\Factory\CommandesFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Factory/CommandesFactory.php';

        return $container->privates['App\\Factory\\CommandesFactory'] = new \App\Factory\CommandesFactory();
    }
}