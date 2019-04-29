<?php

namespace App\Form;

use App\Entity\Casavacacional;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CasavacacionalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('casadireccion')
            ->add('casaprecio')
            ->add('cantbannos')
            ->add('canthabitaciones')
            ->add('patio')
            ->add('balcon')
            ->add('canthuesped')
            ->add('descripcion')
            ->add('Zona')
            ->add('Centrosalud')
            ->add('Supermercado')
            ->add('Universidad')
            ->add('Servicios')
            ->add('Reserva')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Casavacacional::class,
        ]);
    }
}
