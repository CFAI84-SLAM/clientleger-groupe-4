<?php

namespace ContainerUjxSVl2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ktnpk5hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ktnpk5h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ktnpk5h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'utilisateur' => ['privates', '.errored..service_locator.ktnpk5h.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.ktnpk5h": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]);
    }
}
