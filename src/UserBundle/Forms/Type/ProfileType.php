<?php

namespace UserBundle\Forms\Type;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname', TextType::class, [
            'label' => 'form.firstname',
            'attr' => [
                'placeholder' => 'John'
            ]
        ]);

        $builder->add('lastname', TextType::class, [
            'label' => 'form.lastname',
            'attr' => [
                'placeholder' => 'Doe'
            ]
        ]);

        $builder->add('file', null, [
            'label' => 'form.file'
        ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'FOSUserBundle',
        ]);
    }

    /**
     * @return string|null
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }
}
