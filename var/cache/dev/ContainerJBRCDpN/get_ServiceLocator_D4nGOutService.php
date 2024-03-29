<?php

namespace ContainerJBRCDpN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D4nGOutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D4nGOut' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D4nGOut'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'mailer' => '?',
            'translator' => '?',
        ]);
    }
}
