<?php

namespace tests\Kisphp;

use Kisphp\FormExtensionBundle\DependencyInjection\Compiler\TwigFormPass;
use Kisphp\FormExtensionBundle\FormExtensionBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FormExtensionBundleTest extends TestCase
{
    public function testBuild()
    {
        $container = new ContainerBuilder();
        $bundle = new FormExtensionBundle();

        $bundle->build($container);

        $passes = $container->getCompilerPassConfig()->getBeforeOptimizationPasses();

        self::assertEquals(5, count($passes));
        self::assertInstanceOf(TwigFormPass::class, $passes[3]);
    }
}
