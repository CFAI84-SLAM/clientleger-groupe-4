<?php

namespace ContainerAuKULOs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartSessionStorageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Storage\CartSessionStorage' shared autowired service.
     *
     * @return \App\Storage\CartSessionStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Storage/CartSessionStorage.php';

        return $container->privates['App\\Storage\\CartSessionStorage'] = new \App\Storage\CartSessionStorage(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\CommandesRepository'] ?? $container->load('getCommandesRepositoryService')));
    }
}
