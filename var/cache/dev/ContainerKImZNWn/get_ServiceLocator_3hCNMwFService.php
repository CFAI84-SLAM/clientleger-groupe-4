<?php

namespace ContainerKImZNWn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3hCNMwFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3hCNMwF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3hCNMwF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.b1fmCyc', 'get_ServiceLocator_B1fmCycService', true],
            'App\\Controller\\CommandesController::index' => ['privates', '.service_locator.x7_sq9S', 'get_ServiceLocator_X7Sq9SService', true],
            'App\\Controller\\HomeController::entree' => ['privates', '.service_locator.KNsAo1k', 'get_ServiceLocator_KNsAo1kService', true],
            'App\\Controller\\HomeController::entrees' => ['privates', '.service_locator.KNsAo1k', 'get_ServiceLocator_KNsAo1kService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.ojK4h78', 'get_ServiceLocator_OjK4h78Service', true],
            'App\\Controller\\HomeController::plats' => ['privates', '.service_locator.KNsAo1k', 'get_ServiceLocator_KNsAo1kService', true],
            'App\\Controller\\ProductController::detail' => ['privates', '.service_locator.fWUhXRR', 'get_ServiceLocator_FWUhXRRService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.D4nGOut', 'get_ServiceLocator_D4nGOutService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.LI1wy7E', 'get_ServiceLocator_LI1wy7EService', true],
            'App\\Controller\\SecurityController::connected' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UtilisateurController::delete' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController::edit' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController::index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UtilisateurController::new' => ['privates', '.service_locator.wGphWPZ', 'get_ServiceLocator_WGphWPZService', true],
            'App\\Controller\\UtilisateurController::show' => ['privates', '.service_locator.wxsJsLA', 'get_ServiceLocator_WxsJsLAService', true],
            'App\\Factory\\CommandesFactory::createItem' => ['privates', '.service_locator.w_v4Yqu', 'get_ServiceLocator_WV4YquService', true],
            'App\\Factory\\CommandesFactory::update' => ['privates', '.service_locator.JI6ffAS', 'get_ServiceLocator_JI6ffASService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.b1fmCyc', 'get_ServiceLocator_B1fmCycService', true],
            'App\\Controller\\CommandesController:index' => ['privates', '.service_locator.x7_sq9S', 'get_ServiceLocator_X7Sq9SService', true],
            'App\\Controller\\HomeController:entree' => ['privates', '.service_locator.KNsAo1k', 'get_ServiceLocator_KNsAo1kService', true],
            'App\\Controller\\HomeController:entrees' => ['privates', '.service_locator.KNsAo1k', 'get_ServiceLocator_KNsAo1kService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.ojK4h78', 'get_ServiceLocator_OjK4h78Service', true],
            'App\\Controller\\HomeController:plats' => ['privates', '.service_locator.KNsAo1k', 'get_ServiceLocator_KNsAo1kService', true],
            'App\\Controller\\ProductController:detail' => ['privates', '.service_locator.fWUhXRR', 'get_ServiceLocator_FWUhXRRService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.D4nGOut', 'get_ServiceLocator_D4nGOutService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.LI1wy7E', 'get_ServiceLocator_LI1wy7EService', true],
            'App\\Controller\\SecurityController:connected' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UtilisateurController:delete' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController:edit' => ['privates', '.service_locator.ktnpk5h', 'get_ServiceLocator_Ktnpk5hService', true],
            'App\\Controller\\UtilisateurController:index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UtilisateurController:new' => ['privates', '.service_locator.wGphWPZ', 'get_ServiceLocator_WGphWPZService', true],
            'App\\Controller\\UtilisateurController:show' => ['privates', '.service_locator.wxsJsLA', 'get_ServiceLocator_WxsJsLAService', true],
            'App\\Factory\\CommandesFactory:createItem' => ['privates', '.service_locator.w_v4Yqu', 'get_ServiceLocator_WV4YquService', true],
            'App\\Factory\\CommandesFactory:update' => ['privates', '.service_locator.JI6ffAS', 'get_ServiceLocator_JI6ffASService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CommandesController::index' => '?',
            'App\\Controller\\HomeController::entree' => '?',
            'App\\Controller\\HomeController::entrees' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::plats' => '?',
            'App\\Controller\\ProductController::detail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::connected' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UtilisateurController::delete' => '?',
            'App\\Controller\\UtilisateurController::edit' => '?',
            'App\\Controller\\UtilisateurController::index' => '?',
            'App\\Controller\\UtilisateurController::new' => '?',
            'App\\Controller\\UtilisateurController::show' => '?',
            'App\\Factory\\CommandesFactory::createItem' => '?',
            'App\\Factory\\CommandesFactory::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CommandesController:index' => '?',
            'App\\Controller\\HomeController:entree' => '?',
            'App\\Controller\\HomeController:entrees' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:plats' => '?',
            'App\\Controller\\ProductController:detail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:connected' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UtilisateurController:delete' => '?',
            'App\\Controller\\UtilisateurController:edit' => '?',
            'App\\Controller\\UtilisateurController:index' => '?',
            'App\\Controller\\UtilisateurController:new' => '?',
            'App\\Controller\\UtilisateurController:show' => '?',
            'App\\Factory\\CommandesFactory:createItem' => '?',
            'App\\Factory\\CommandesFactory:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
