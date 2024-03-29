<?php

namespace ContainerJBRCDpN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OjK4h78Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ojK4h78' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ojK4h78'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandesItemRepository' => ['privates', 'App\\Repository\\CommandeItemRepository', 'getCommandeItemRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'commandesItemRepository' => 'App\\Repository\\CommandeItemRepository',
            'productRepository' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
