<?php

namespace ContainerAuKULOs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_Exception_ValidationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.exception.validation' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Validator/EventListener/ValidationExceptionListener.php';

        $a = ($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService());

        if (isset($container->privates['api_platform.listener.exception.validation'])) {
            return $container->privates['api_platform.listener.exception.validation'];
        }

        return $container->privates['api_platform.listener.exception.validation'] = new \ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener($a, $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status']);
    }
}
