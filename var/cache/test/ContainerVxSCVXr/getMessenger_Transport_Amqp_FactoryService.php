<?php

namespace ContainerVxSCVXr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_Amqp_FactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.transport.amqp.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/amqp-messenger/Transport/AmqpTransportFactory.php';

        return $container->privates['messenger.transport.amqp.factory'] = new \Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory();
    }
}