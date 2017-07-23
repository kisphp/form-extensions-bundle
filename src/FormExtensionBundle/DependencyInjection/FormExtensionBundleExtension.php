<?php

namespace Kisphp\FormExtensionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class FormExtensionBundleExtension extends Extension
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
        $loader->load('form_extra.yml');

        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), $configs);

        if ($config['help_extension']) {
            $loader->load('field_type_help.yml');
        }
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return 'kisphp_form_extensions';
    }
}