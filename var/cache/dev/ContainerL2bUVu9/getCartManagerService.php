<?php

namespace ContainerL2bUVu9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Manager\CartManager' shared autowired service.
     *
     * @return \App\Manager\CartManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Manager/CartManager.php';
        include_once \dirname(__DIR__, 4).'/src/Storage/CartSessionStorage.php';
        include_once \dirname(__DIR__, 4).'/src/Factory/CommandesFactory.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Manager\\CartManager'])) {
            return $container->privates['App\\Manager\\CartManager'];
        }

        return $container->privates['App\\Manager\\CartManager'] = new \App\Manager\CartManager(new \App\Storage\CartSessionStorage(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\CommandesRepository'] ?? $container->load('getCommandesRepositoryService'))), new \App\Factory\CommandesFactory(), $a);
    }
}
