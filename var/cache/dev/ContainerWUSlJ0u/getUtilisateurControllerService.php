<?php

namespace ContainerWUSlJ0u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UtilisateurController' shared autowired service.
     *
     * @return \App\Controller\UtilisateurController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UtilisateurController.php';

        $container->services['App\\Controller\\UtilisateurController'] = $instance = new \App\Controller\UtilisateurController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\UtilisateurController', $container));

        return $instance;
    }
}
