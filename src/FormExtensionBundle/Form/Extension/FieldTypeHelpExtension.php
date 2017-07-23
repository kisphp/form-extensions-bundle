<?php

namespace Kisphp\FormExtensionBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FieldTypeHelpExtension extends AbstractTypeExtension
{
    const FIELD_HELP = 'help';

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAttribute(self::FIELD_HELP, $options[self::FIELD_HELP]);
    }
    /**
     * @param FormView      $view
     * @param FormInterface $form
     * @param array         $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars[self::FIELD_HELP] = $options[self::FIELD_HELP];
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            self::FIELD_HELP => null,
        ]);
    }
    /**
     * @return string
     */
    public function getExtendedType()
    {
        return 'form';
    }
}
