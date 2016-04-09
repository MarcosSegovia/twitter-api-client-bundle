<?php

namespace MarcosSegovia\TwitterApiClientBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

final class TwitterApiClientExtension extends ConfigurableExtension
{
    /**
     * Configures the passed container according to the merged configuration.
     *
     * @param array            $mergedConfig
     * @param ContainerBuilder $container
     */
    protected function loadInternal(
        array $mergedConfig,
        ContainerBuilder $container
    )
    {
        /**
         * Setting defined parameters to services
         */
        $container->setParameter('twitter.api_key',
            $mergedConfig['twitter']['api_key']
        );

        $container->setParameter('twitter.api_secret',
            $mergedConfig['twitter']['api_secret']
        );

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        $loader->load('services.yml');
    }

}
