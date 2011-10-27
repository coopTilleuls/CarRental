<?php

namespace Dunglas\Bundle\CarRentalBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;

class MaintenanceAdmin extends Admin {

    protected $list = array(
        'id',
        'vehicle' => array('identifier' => true),
        'scheduled',
        'date'
    );
    
    protected $form = array(
        'date',
        'scheduled',
        'vehicle',
        'notes',
        'created',
        'updated'
    );

}