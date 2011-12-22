<?php

namespace Dunglas\Bundle\CarRentalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Dunglas\Bundle\CarRentalBundle\Entity\Customer;

class CustomerAdmin extends Admin
{

    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('gender', 'choice', array('choices' => Customer::getGenders()))
                ->add('lastName')
                ->add('firstName')
                ->add('birth')
                ->add('address1')
                ->add('address2', null, array('required' => false))
                ->add('city')
                ->add('zipCode')
                ->add('country', null, array('required' => false))
                ->add('phoneNumber1', null, array('required' => false))
                ->add('phoneNumber2', null, array('required' => false))
                ->add('emailAddress', null, array('required' => false))
                ->add('registrationDate')
                ->add('active')
                ->add('notes', null, array('required' => false));
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('id')
                ->addIdentifier('lastName')
                ->add('firstName')
                ->add('city')
                ->add('emailAddress')
                ->add('phoneNumber1')
                ->add('active')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array()))
        );
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('lastName')
                ->add('firstName')
                ->add('city');
    }
}