<?php

namespace Dunglas\Bundle\CarRentalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('model')
            ->add('numberPlate')
            ->add('version')
            ->add('fuel')
            ->add('nextVehicleInspection')
            ->add('lastValvetrain')
            ->add('valvetrain')
            ->add('notes')
            ->add('active')
            ->add('created')
            ->add('updated')
        ;
    }    
}