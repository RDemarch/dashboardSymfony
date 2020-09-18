<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('credential', IntegrerType::class)
            ->add('category', TextType::class)
            ->add('buyingDate', DateType::class)
            ->add('endWarantyDate', DateType::class)
            ->add('maintenanceAdvice', TextType::class)
            ->add('userManual', FileType::class)
            ->add('price', IntegrerType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
