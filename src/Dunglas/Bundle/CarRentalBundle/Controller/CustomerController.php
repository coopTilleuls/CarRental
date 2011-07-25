<?php

namespace Dunglas\Bundle\CarRentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dunglas\Bundle\CarRentalBundle\Entity\Customer;
use Dunglas\Bundle\CarRentalBundle\Form\CustomerType;

/**
 * Customer controller.
 *
 * @Route("/customer")
 */
class CustomerController extends Controller
{
    /**
     * Lists all Customer entities.
     *
     * @Route("/", name="customer")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('DunglasCarRentalBundle:Customer')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Customer entity.
     *
     * @Route("/{id}/show", name="customer_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     * @Route("/new", name="customer_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Customer();
        $form   = $this->createForm(new CustomerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Customer entity.
     *
     * @Route("/create", name="customer_create")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Customer:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Customer();
        $request = $this->getRequest();
        $form    = $this->createForm(new CustomerType(), $entity);

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('customer_show', array('id' => $entity->getId())));
                
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     * @Route("/{id}/edit", name="customer_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Customer entity.
     *
     * @Route("/{id}/update", name="customer_update")
     * @Method("post")
     * @Template("DunglasCarRentalBundle:Customer:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('DunglasCarRentalBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm   = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $editForm->bindRequest($request);

            if ($editForm->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('customer_edit', array('id' => $id)));
            }
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Customer entity.
     *
     * @Route("/{id}/delete", name="customer_delete")
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
                $entity = $em->getRepository('DunglasCarRentalBundle:Customer')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Customer entity.');
                }

                $em->remove($entity);
                $em->flush();
            }
        }

        return $this->redirect($this->generateUrl('customer'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
