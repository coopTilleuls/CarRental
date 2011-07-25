<?php

namespace Dunglas\Bundle\CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dunglas\Bundle\CarRentalBundle\Entity\Model;
use Dunglas\Bundle\CarRentalBundle\Form\ModelType;

/**
 * Model controller.
 *
 * @Route("/model")
 */
class ModelController extends Controller
{
    /**
     * Lists all Model entities.
     *
     * @Route("/", name="model")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DunglasCarRentalBundle:Model')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Model entity.
     *
     * @Route("/{id}/show", name="model_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Model')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Model entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Model entity.
     *
     * @Route("/new", name="model_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Model();
        $form   = $this->createForm(new ModelType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Model entity.
     *
     * @Route("/create", name="model_create")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Model:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Model();
        $request = $this->getRequest();
        $form    = $this->createForm(new ModelType(), $entity);

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('model_show', array('id' => $entity->getId())));
                
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Model entity.
     *
     * @Route("/{id}/edit", name="model_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Model')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Model entity.');
        }

        $editForm = $this->createForm(new ModelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Model entity.
     *
     * @Route("/{id}/update", name="model_update")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Model:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Model')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Model entity.');
        }

        $editForm   = $this->createForm(new ModelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $editForm->bindRequest($request);

            if ($editForm->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('model_edit', array('id' => $id)));
            }
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Model entity.
     *
     * @Route("/{id}/delete", name="model_delete")
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
                $entity = $em->getRepository('DunglasCarRentalBundle:Model')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Model entity.');
                }

                $em->remove($entity);
                $em->flush();
            }
        }

        return $this->redirect($this->generateUrl('model'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
