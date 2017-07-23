<?php

namespace Kisphp\FormExtensionBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TwigFormPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ( ! $container->hasParameter('twig.form.resources')) {
            return;
        }

        $container->setParameter('twig.form.resources', array_merge(
            ['@FormExtension/Form/field_type_help.html.twig'],
            $container->getParameter('twig.form.resources')
        ));
    }
}
