<?php

namespace Container8VvL8x1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeEntity_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_entity.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_entity.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:entity', [], 'Creates or updates a Doctrine entity class, and optionally an API Platform resource', false, function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_entity'] ?? $container->load('getMaker_AutoCommand_MakeEntityService'));
        });
    }
}
