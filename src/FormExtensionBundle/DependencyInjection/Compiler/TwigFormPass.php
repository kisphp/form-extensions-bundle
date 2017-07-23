<?php

namespace Kisphp\FormExtensionBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TwigFormPass implements CompilerPassInterface
{
    const TWIG_FORM_RESOURCES = 'twig.form.resources';

    const FIELD_HELP_EXTENSION_TEMPLATE = '@FormExtension/Form/field_type_help.html.twig';

    public function process(ContainerBuilder $container)
    {
        if ( ! $container->hasParameter(self::TWIG_FORM_RESOURCES)) {
            return;
        }

        $container->setParameter(self::TWIG_FORM_RESOURCES, array_merge(
            [self::FIELD_HELP_EXTENSION_TEMPLATE],
            $container->getParameter(self::TWIG_FORM_RESOURCES)
        ));
    }
}
