<?php

namespace Dunglas\Bundle\CarRentalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ManufacturerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('created')
            ->add('updated')
        ;
    }
}