<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Workplace;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Workplace controller.
 *
 * @Route("workplace")
 */
class WorkplaceController extends Controller
{
    /**
     * Lists all workplace entities.
     *
     * @Route("/", name="workplace_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workplaces = $em->getRepository('AppBundle:Workplace')->findAll();

        return $this->render('workplace/index.html.twig', array(
            'workplaces' => $workplaces,
        ));
    }

    /**
     * Creates a new workplace entity.
     *
     * @Route("/new", name="workplace_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $workplace = new Workplace();
        $form = $this->createForm('AppBundle\Form\WorkplaceType', $workplace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workplace);
            $em->flush();

            return $this->redirectToRoute('workplace_show', array('id' => $workplace->getId()));
        }

        return $this->render('workplace/new.html.twig', array(
            'workplace' => $workplace,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a workplace entity.
     *
     * @Route("/{id}", name="workplace_show")
     * @Method("GET")
     */
    public function showAction(Workplace $workplace)
    {
        $deleteForm = $this->createDeleteForm($workplace);

        return $this->render('workplace/show.html.twig', array(
            'workplace' => $workplace,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing workplace entity.
     *
     * @Route("/{id}/edit", name="workplace_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Workplace $workplace)
    {
        $deleteForm = $this->createDeleteForm($workplace);
        $editForm = $this->createForm('AppBundle\Form\WorkplaceType', $workplace);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('workplace_edit', array('id' => $workplace->getId()));
        }

        return $this->render('workplace/edit.html.twig', array(
            'workplace' => $workplace,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a workplace entity.
     *
     * @Route("/{id}", name="workplace_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Workplace $workplace)
    {
        $form = $this->createDeleteForm($workplace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($workplace);
            $em->flush();
        }

        return $this->redirectToRoute('workplace_index');
    }

    /**
     * Creates a form to delete a workplace entity.
     *
     * @param Workplace $workplace The workplace entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Workplace $workplace)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workplace_delete', array('id' => $workplace->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
