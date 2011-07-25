<?php

namespace Dunglas\Bundle\CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dunglas\Bundle\CarRentalBundle\Entity\Fuel;
use Dunglas\Bundle\CarRentalBundle\Form\FuelType;

/**
 * Fuel controller.
 *
 * @Route("/fuel")
 */
class FuelController extends Controller
{
    /**
     * Lists all Fuel entities.
     *
     * @Route("/", name="fuel")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DunglasCarRentalBundle:Fuel')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Fuel entity.
     *
     * @Route("/{id}/show", name="fuel_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Fuel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fuel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Fuel entity.
     *
     * @Route("/new", name="fuel_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Fuel();
        $form   = $this->createForm(new FuelType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Fuel entity.
     *
     * @Route("/create", name="fuel_create")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Fuel:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Fuel();
        $request = $this->getRequest();
        $form    = $this->createForm(new FuelType(), $entity);

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('fuel_show', array('id' => $entity->getId())));
                
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Fuel entity.
     *
     * @Route("/{id}/edit", name="fuel_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Fuel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fuel entity.');
        }

        $editForm = $this->createForm(new FuelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Fuel entity.
     *
     * @Route("/{id}/update", name="fuel_update")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Fuel:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Fuel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fuel entity.');
        }

        $editForm   = $this->createForm(new FuelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $editForm->bindRequest($request);

            if ($editForm->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('fuel_edit', array('id' => $id)));
            }
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Fuel entity.
     *
     * @Route("/{id}/delete", name="fuel_delete")
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
                $entity = $em->getRepository('DunglasCarRentalBundle:Fuel')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Fuel entity.');
                }

                $em->remove($entity);
                $em->flush();
            }
        }

        return $this->redirect($this->generateUrl('fuel'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
