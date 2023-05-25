<?php

namespace ContainerEGoJUhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WV4YquService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.w_v4Yqu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w_v4Yqu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product' => ['privates', '.errored..service_locator.w_v4Yqu.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.w_v4Yqu": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'product' => 'App\\Entity\\Produit',
        ]);
    }
}
