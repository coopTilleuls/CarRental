<?php

namespace Dunglas\Bundle\CarRentalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ModelAdmin extends Admin
{

    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('manufacturer', 'sonata_type_model')
                ->add('name');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('name')
                ->add('manufacturer')
                ->add('created')
                ->add('updated')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array()))
        );
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('manufacturer')
                ->add('name');
    }
}