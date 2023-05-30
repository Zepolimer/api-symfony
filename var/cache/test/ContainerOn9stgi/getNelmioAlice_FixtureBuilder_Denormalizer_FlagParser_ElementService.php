<?php

namespace ContainerOn9stgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_ElementService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.flag_parser.element' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/ElementFlagParser.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser(($container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.registry'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_RegistryService')));
    }
}
