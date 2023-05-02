<?php

namespace ContainerB9sDx4k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7MfkIaGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7MfkIaG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7MfkIaG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartManager' => ['privates', 'App\\Manager\\CartManager', 'getCartManagerService', true],
        ], [
            'cartManager' => 'App\\Manager\\CartManager',
        ]);
    }
}
