<?php

namespace Williams\WholesaleBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class WilliamsWholesaleExtension extends Extension {

    public function load(array $configs, ContainerBuilder $container) {

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader(
                $container, new FileLocator(__DIR__ . '/../Resources/config'));


        $container->setParameter('williams_wholesale.url', $config['url']);

        $loader->load('services.yml');
    }

}
