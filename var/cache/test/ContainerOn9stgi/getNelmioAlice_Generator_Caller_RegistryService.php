<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Caller_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.caller.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\CallProcessorRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/ChainableCallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/ConfiguratorMethodCallProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/MethodCallWithReferenceProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/OptionalMethodCallProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/SimpleMethodCallProcessor.php';

        return $container->privates['nelmio_alice.generator.caller.registry'] = new \Nelmio\Alice\Generator\Caller\CallProcessorRegistry([0 => ($container->privates['nelmio_alice.generator.caller.chainable.configurator_method_call'] ?? ($container->privates['nelmio_alice.generator.caller.chainable.configurator_method_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\ConfiguratorMethodCallProcessor())), 1 => ($container->privates['nelmio_alice.generator.caller.chainable.method_call_with_reference'] ?? ($container->privates['nelmio_alice.generator.caller.chainable.method_call_with_reference'] = new \Nelmio\Alice\Generator\Caller\Chainable\MethodCallWithReferenceProcessor())), 2 => ($container->privates['nelmio_alice.generator.caller.chainable.optional_method_call'] ?? ($container->privates['nelmio_alice.generator.caller.chainable.optional_method_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\OptionalMethodCallProcessor())), 3 => ($container->privates['nelmio_alice.generator.caller.chainable.simple_call'] ?? ($container->privates['nelmio_alice.generator.caller.chainable.simple_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\SimpleMethodCallProcessor()))]);
    }
}
