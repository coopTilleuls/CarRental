<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class VehicleAdmin extends Admin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('model')
                ->add('numberPlate')
                ->add('version')
                ->add('fuel')
                ->add('nextVehicleInspection')
                ->add('lastValvetrain')
                ->add('valvetrain')
                ->add('notes', null, array('required' => false))
                ->add('active');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('id')
                ->addIdentifier('numberPlate')
                ->add('model')
                ->add('active')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array()))
        );
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('numberPlate')
                ->add('model');
    }
}