<?php

namespace Dunglas\Bundle\CarRentalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('gender')
            ->add('lastName')
            ->add('firstName')
            ->add('address1')
            ->add('address2')
            ->add('city')
            ->add('zipCode')
            ->add('country')
            ->add('emailAddress', 'email')
            ->add('phoneNumber1')
            ->add('phoneNumber2')
            ->add('registrationDate')
            ->add('birth')
            ->add('notes')
            ->add('active')
            ->add('created')
            ->add('updated')
        ;
    }
}