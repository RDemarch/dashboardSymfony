<?php

namespace App\Form;

use App\Entity\Crud;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CrudType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('credential')
            ->add('category')
            ->add('buyingDate')
            ->add('endWarantyDate')
            ->add('maintenanceAdvice')
            ->add('userManual')
            ->add('price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Crud::class,
        ]);
    }
}
