<?php

namespace Kisphp\FormExtensionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('kisphp_form_extensions');

//        $rootNode
//            ->children()
//                ->booleanNode('translation_domain_forward_compat')->defaultTrue()->end()
//                ->booleanNode('help_extension')->defaultTrue()->end()
//            ->end()
//        ->end();

        return $treeBuilder;
    }
}
