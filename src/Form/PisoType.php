<?php

namespace App\Form;

use App\Entity\Piso;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PisoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('direccion')
            ->add('precio')
            ->add('canthabitaciones')
            ->add('cantbannos')
            ->add('pisopatio')
            ->add('pisobalcon')
            ->add('chicas')
            ->add('pisocanthuesped')
            ->add('Zona')
            ->add('Habitaciones')
            ->add('Centrosalud')
            ->add('Supermercado')
            ->add('Universidad')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Piso::class,
        ]);
    }
}
