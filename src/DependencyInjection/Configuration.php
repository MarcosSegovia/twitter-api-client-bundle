<?php

namespace MarcosSegovia\TwitterApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $tree_builder = new TreeBuilder();
        $root_node    = $tree_builder->root('twitter_api_client');

        $root_node
            ->children()
                ->arrayNode('twitter')
                    ->children()
                        ->scalarNode('api_key')->end()
                        ->scalarNode('api_secret')->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $tree_builder;
    }

}
