<?php

namespace Kisphp\FormExtensionBundle\Form\Extension;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class TranslationDomainExtension extends AbstractType
{
    const TRANSLATION_DOMAIN = 'translation_domain';

    /**
     * @return string
     */
    public function getExtendedType()
    {
        return 'field';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAttribute(self::TRANSLATION_DOMAIN, $options[self::TRANSLATION_DOMAIN]);
    }

    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->set(self::TRANSLATION_DOMAIN, $form->getAttribute(self::TRANSLATION_DOMAIN));
    }

    /**
     * @param array $options
     *
     * @return array
     */
    public function getDefaultOptions()
    {
        return [
            self::TRANSLATION_DOMAIN => 'messages',
        ];
    }
}
