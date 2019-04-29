<?php

namespace App\Form;

use App\Entity\Reserva;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechainicio')
            ->add('fechafin')
            ->add('pasaporte')
            ->add('sexo')
            ->add('telefono')
            ->add('descripcion')
            ->add('Cliente')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reserva::class,
        ]);
    }
}
