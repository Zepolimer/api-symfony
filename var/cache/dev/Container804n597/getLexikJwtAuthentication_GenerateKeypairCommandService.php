<?php

namespace Container804n597;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_GenerateKeypairCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'lexik_jwt_authentication.generate_keypair_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/GenerateKeyPairCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $container->privates['lexik_jwt_authentication.generate_keypair_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand(($container->privates['filesystem'] ?? ($container->privates['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), $container->getEnv('resolve:JWT_SECRET_KEY'), $container->getEnv('resolve:JWT_PUBLIC_KEY'), $container->getEnv('JWT_PASSPHRASE'), 'RS256');

        $instance->setName('lexik:jwt:generate-keypair');
        $instance->setDescription('Generate public/private keys for use in your application.');

        return $instance;
    }
}
