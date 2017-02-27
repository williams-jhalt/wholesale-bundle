<?php

namespace Williams\WholesaleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('williams_wholesale');

        $rootNode->children()
                ->scalarNode('url')->end()
                ->end();

        return $treeBuilder;
    }

}
