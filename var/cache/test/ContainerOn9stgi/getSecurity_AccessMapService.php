<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/login'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/register'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/users'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/groupes'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/groupes/users'), [0 => 'PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/groupes/<int>/modify'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);

        return $instance;
    }
}
