<?php

namespace Dunglas\Bundle\CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dunglas\Bundle\CarRentalBundle\Entity\Vehicle;
use Dunglas\Bundle\CarRentalBundle\Form\VehicleType;

/**
 * Vehicle controller.
 *
 * @Route("/vehicle")
 */
class VehicleController extends Controller
{
    /**
     * Lists all Vehicle entities.
     *
     * @Route("/", name="vehicle")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DunglasCarRentalBundle:Vehicle')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Vehicle entity.
     *
     * @Route("/{id}/show", name="vehicle_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Vehicle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehicle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Vehicle entity.
     *
     * @Route("/new", name="vehicle_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Vehicle();
        $form   = $this->createForm(new VehicleType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Vehicle entity.
     *
     * @Route("/create", name="vehicle_create")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Vehicle:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Vehicle();
        $request = $this->getRequest();
        $form    = $this->createForm(new VehicleType(), $entity);

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('vehicle_show', array('id' => $entity->getId())));
                
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Vehicle entity.
     *
     * @Route("/{id}/edit", name="vehicle_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Vehicle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehicle entity.');
        }

        $editForm = $this->createForm(new VehicleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Vehicle entity.
     *
     * @Route("/{id}/update", name="vehicle_update")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Vehicle:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Vehicle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vehicle entity.');
        }

        $editForm   = $this->createForm(new VehicleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $editForm->bindRequest($request);

            if ($editForm->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('vehicle_edit', array('id' => $id)));
            }
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Vehicle entity.
     *
     * @Route("/{id}/delete", name="vehicle_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $entity = $em->getRepository('DunglasCarRentalBundle:Vehicle')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Vehicle entity.');
                }

                $em->remove($entity);
                $em->flush();
            }
        }

        return $this->redirect($this->generateUrl('vehicle'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
