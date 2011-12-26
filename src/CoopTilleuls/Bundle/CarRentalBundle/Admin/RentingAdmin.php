<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RentingAdmin extends Admin
{

    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('customer', 'sonata_type_model', array(), array('edit' => 'list'))
                ->add('vehicle', 'sonata_type_model', array(), array('edit' => 'list'))
                ->add('exited')
                ->add('scheduledReturn')
                ->add('returned')
                //->add('payments', 'sonata_type_collection', array(), array('edit' => 'inline', 'inline' => 'table'))
                ->add('active')
                ->add('notes', null, array('required' => false));
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('id')
                ->addIdentifier('exited')
                ->add('scheduledReturn')
                ->add('returned')
                ->add('customer')
                ->add('vehicle')
                ->add('active')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array()))
        );
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('customer')
                ->add('vehicle');
    }
}