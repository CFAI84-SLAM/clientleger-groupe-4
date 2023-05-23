<?php

namespace ContainerVxSCVXr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartItemTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Form\CartItemType' shared autowired service.
     *
     * @return \App\Form\CartItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CartItemType.php';

        return $container->privates['App\\Form\\CartItemType'] = new \App\Form\CartItemType();
    }
}
