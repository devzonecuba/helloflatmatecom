<?php

namespace App\Form;

use App\Entity\Habitaciones;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HabitacionesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantcamas')
            ->add('descripcion')
            ->add('disponible')
            ->add('Cama')
            ->add('Servicios')
            ->add('Reserva')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Habitaciones::class,
        ]);
    }
}
