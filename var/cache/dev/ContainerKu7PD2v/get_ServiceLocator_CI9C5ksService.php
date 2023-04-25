<?php

namespace ContainerKu7PD2v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CI9C5ksService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CI9C5ks' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CI9C5ks'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.sr8B0kJ', 'get_ServiceLocator_Sr8B0kJService', true],
            'App\\Controller\\ProductController::detail' => ['privates', '.service_locator.fWUhXRR', 'get_ServiceLocator_FWUhXRRService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UtilisateurController::delete' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController::edit' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController::index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UtilisateurController::new' => ['privates', '.service_locator.wGphWPZ', 'get_ServiceLocator_WGphWPZService', true],
            'App\\Controller\\UtilisateurController::show' => ['privates', '.service_locator.wxsJsLA', 'get_ServiceLocator_WxsJsLAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.sr8B0kJ', 'get_ServiceLocator_Sr8B0kJService', true],
            'App\\Controller\\ProductController:detail' => ['privates', '.service_locator.fWUhXRR', 'get_ServiceLocator_FWUhXRRService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UtilisateurController:delete' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController:edit' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController:index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UtilisateurController:new' => ['privates', '.service_locator.wGphWPZ', 'get_ServiceLocator_WGphWPZService', true],
            'App\\Controller\\UtilisateurController:show' => ['privates', '.service_locator.wxsJsLA', 'get_ServiceLocator_WxsJsLAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ProductController::detail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UtilisateurController::delete' => '?',
            'App\\Controller\\UtilisateurController::edit' => '?',
            'App\\Controller\\UtilisateurController::index' => '?',
            'App\\Controller\\UtilisateurController::new' => '?',
            'App\\Controller\\UtilisateurController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ProductController:detail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UtilisateurController:delete' => '?',
            'App\\Controller\\UtilisateurController:edit' => '?',
            'App\\Controller\\UtilisateurController:index' => '?',
            'App\\Controller\\UtilisateurController:new' => '?',
            'App\\Controller\\UtilisateurController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
