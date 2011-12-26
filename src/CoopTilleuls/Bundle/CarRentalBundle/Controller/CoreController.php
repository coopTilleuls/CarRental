<?php

/**
 * Core
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
namespace CoopTilleuls\Bundle\CarRentalBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function homepageAction()
    {
        return $this->redirect($this->generateUrl('sonata_admin_dashboard'), 301);
    }
}
