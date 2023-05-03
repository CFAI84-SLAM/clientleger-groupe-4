<?php

namespace ContainerFHsGZIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Messenger_DataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.messenger.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Messenger\DataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Messenger/DispatchTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Messenger/DataPersister.php';

        $a = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->privates['api_platform.messenger.data_persister'])) {
            return $container->privates['api_platform.messenger.data_persister'];
        }

        return $container->privates['api_platform.messenger.data_persister'] = new \ApiPlatform\Core\Bridge\Symfony\Messenger\DataPersister(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $a);
    }
}
