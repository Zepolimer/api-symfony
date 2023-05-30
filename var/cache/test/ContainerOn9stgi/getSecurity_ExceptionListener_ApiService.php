<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ExceptionListener_ApiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.exception_listener.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';

        return $container->privates['security.exception_listener.api'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'api', ($container->privates['security.authenticator.jwt.api'] ?? $container->load('getSecurity_Authenticator_Jwt_ApiService')), NULL, NULL, ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }
}
