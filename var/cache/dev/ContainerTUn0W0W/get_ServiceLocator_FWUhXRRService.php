<?php

namespace ContainerTUn0W0W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FWUhXRRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fWUhXRR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fWUhXRR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartManager' => ['privates', 'App\\Manager\\CartManager', 'getCartManagerService', true],
            'product' => ['privates', '.errored..service_locator.fWUhXRR.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.fWUhXRR": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'cartManager' => 'App\\Manager\\CartManager',
            'product' => 'App\\Entity\\Produit',
        ]);
    }
}