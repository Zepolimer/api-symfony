<?php

namespace Container804n597;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_HautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('hautelook:fixtures:load', [], 'Load data fixtures to your database.', false, #[\Closure(name: 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command', class: 'Hautelook\\AliceBundle\\Console\\Command\\Doctrine\\DoctrineOrmLoadDataFixturesCommand')] function () use ($container): \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand {
            return ($container->services['hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command'] ?? $container->load('getHautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommandService'));
        });
    }
}
