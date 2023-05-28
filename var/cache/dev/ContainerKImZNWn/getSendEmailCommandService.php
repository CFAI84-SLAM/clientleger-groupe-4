<?php

namespace ContainerKImZNWn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendEmailCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\SendEmailCommand' shared autowired service.
     *
     * @return \App\Command\SendEmailCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/SendEmailCommand.php';

        $container->privates['App\\Command\\SendEmailCommand'] = $instance = new \App\Command\SendEmailCommand();

        $instance->setName('send:email');

        return $instance;
    }
}
