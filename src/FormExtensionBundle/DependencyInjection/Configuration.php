<?php

namespace Kisphp\FormExtensionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        return $builder->root('kisphp_form_extensions')
            ->children()
                ->booleanNode('help_extension')->defaultFalse()->end()
            ->end()
        ->end();
    }
}
