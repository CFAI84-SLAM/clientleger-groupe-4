<?php

namespace ContainerVxSCVXr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_FileLinkFormatter_UrlFormatService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['debug.file_link_formatter.url_format'])) {
            return $container->privates['debug.file_link_formatter.url_format'];
        }

        return $container->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat($a, '_profiler_open_file', '?file=%f&line=%l#line%l');
    }
}
