<?php

namespace Kisphp\FormExtensionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class FormExtensionExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        //$loader->load('form_extra.yml');

        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), $configs);

        $loader->load('field_type_help.yml');
//        $loader->load('translation_domain.yml');
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return 'form_extension';
    }
}