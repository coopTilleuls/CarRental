<?php

namespace Dunglas\Bundle\CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dunglas\Bundle\CarRentalBundle\Entity\Manufacturer;
use Dunglas\Bundle\CarRentalBundle\Form\ManufacturerType;

/**
 * Manufacturer controller.
 *
 * @Route("/manufacturer")
 */
class ManufacturerController extends Controller
{
    /**
     * Lists all Manufacturer entities.
     *
     * @Route("/", name="manufacturer")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DunglasCarRentalBundle:Manufacturer')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Manufacturer entity.
     *
     * @Route("/{id}/show", name="manufacturer_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Manufacturer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manufacturer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Manufacturer entity.
     *
     * @Route("/new", name="manufacturer_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Manufacturer();
        $form   = $this->createForm(new ManufacturerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Manufacturer entity.
     *
     * @Route("/create", name="manufacturer_create")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Manufacturer:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Manufacturer();
        $request = $this->getRequest();
        $form    = $this->createForm(new ManufacturerType(), $entity);

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('manufacturer_show', array('id' => $entity->getId())));
                
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Manufacturer entity.
     *
     * @Route("/{id}/edit", name="manufacturer_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Manufacturer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manufacturer entity.');
        }

        $editForm = $this->createForm(new ManufacturerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Manufacturer entity.
     *
     * @Route("/{id}/update", name="manufacturer_update")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Manufacturer:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Manufacturer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manufacturer entity.');
        }

        $editForm   = $this->createForm(new ManufacturerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $editForm->bindRequest($request);

            if ($editForm->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('manufacturer_edit', array('id' => $id)));
            }
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Manufacturer entity.
     *
     * @Route("/{id}/delete", name="manufacturer_delete")
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
                $entity = $em->getRepository('DunglasCarRentalBundle:Manufacturer')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Manufacturer entity.');
                }

                $em->remove($entity);
                $em->flush();
            }
        }

        return $this->redirect($this->generateUrl('manufacturer'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
