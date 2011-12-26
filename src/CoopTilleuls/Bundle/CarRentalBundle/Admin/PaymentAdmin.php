<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PaymentAdmin extends Admin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('amount')
                ->add('date')
                ->add('renting')
                ->add('notes', null, array('required' => false));
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('id')
                ->add('date')
                ->add('renting')
                ->add('amount')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array()))
        );
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('renting');
    }
}