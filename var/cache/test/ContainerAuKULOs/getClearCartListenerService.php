<?php

namespace ContainerAuKULOs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClearCartListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Form\EventListener\ClearCartListener' shared autowired service.
     *
     * @return \App\Form\EventListener\ClearCartListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Form/EventListener/ClearCartListener.php';

        return $container->privates['App\\Form\\EventListener\\ClearCartListener'] = new \App\Form\EventListener\ClearCartListener();
    }
}
