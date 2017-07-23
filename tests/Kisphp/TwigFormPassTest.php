<?php

namespace tests\Kisphp;

use Kisphp\FormExtensionBundle\DependencyInjection\Compiler\TwigFormPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TwigFormPassTest extends TestCase
{
    public function testProcess()
    {
        $container = new ContainerBuilder();
        $pass = new TwigFormPass();

        $pass->process($container);

        self::assertFalse($container->hasParameter('twig.form.resources'));
    }

    public function testProcessWithExtension()
    {
        $container = new ContainerBuilder();
        $pass = new TwigFormPass();

        $container->setParameter('twig.form.resources', []);

        $pass->process($container);

        self::assertEquals(
            [
                '@FormExtension/Form/field_type_help.html.twig',
            ],
            $container->getParameter('twig.form.resources')
        );
    }
}
