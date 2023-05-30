<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ApiPlatform_ArgumentResolver_PayloadService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.api_platform.argument_resolver.payload' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';

        return $container->privates['debug.api_platform.argument_resolver.payload'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($container->privates['debug.api_platform.argument_resolver.payload.inner'] ?? $container->load('getDebug_ApiPlatform_ArgumentResolver_Payload_InnerService')), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
