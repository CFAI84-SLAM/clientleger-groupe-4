<?php

namespace Container1xSN3Qc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WxsJsLAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wxsJsLA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wxsJsLA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'utilisateur' => ['privates', '.errored..service_locator.wxsJsLA.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.wxsJsLA": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]);
    }
}
