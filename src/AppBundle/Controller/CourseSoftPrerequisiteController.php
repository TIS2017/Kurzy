<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CourseSoftPrerequisite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Coursesoftprerequisite controller.
 *
 * @Route("coursesoftprerequisite")
 */
class CourseSoftPrerequisiteController extends Controller
{
    /**
     * Lists all courseSoftPrerequisite entities.
     *
     * @Route("/", name="coursesoftprerequisite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $courseSoftPrerequisites = $em->getRepository('AppBundle:CourseSoftPrerequisite')->findAll();

        return $this->render('coursesoftprerequisite/index.html.twig', array(
            'courseSoftPrerequisites' => $courseSoftPrerequisites,
        ));
    }

    /**
     * Creates a new courseSoftPrerequisite entity.
     *
     * @Route("/new", name="coursesoftprerequisite_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $courseSoftPrerequisite = new Coursesoftprerequisite();
        $form = $this->createForm('AppBundle\Form\CourseSoftPrerequisiteType', $courseSoftPrerequisite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($courseSoftPrerequisite);
            $em->flush();

            return $this->redirectToRoute('coursesoftprerequisite_show', array('id' => $courseSoftPrerequisite->getId()));
        }

        return $this->render('coursesoftprerequisite/new.html.twig', array(
            'courseSoftPrerequisite' => $courseSoftPrerequisite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a courseSoftPrerequisite entity.
     *
     * @Route("/{id}", name="coursesoftprerequisite_show")
     * @Method("GET")
     */
    public function showAction(CourseSoftPrerequisite $courseSoftPrerequisite)
    {
        $deleteForm = $this->createDeleteForm($courseSoftPrerequisite);

        return $this->render('coursesoftprerequisite/show.html.twig', array(
            'courseSoftPrerequisite' => $courseSoftPrerequisite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing courseSoftPrerequisite entity.
     *
     * @Route("/{id}/edit", name="coursesoftprerequisite_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CourseSoftPrerequisite $courseSoftPrerequisite)
    {
        $deleteForm = $this->createDeleteForm($courseSoftPrerequisite);
        $editForm = $this->createForm('AppBundle\Form\CourseSoftPrerequisiteType', $courseSoftPrerequisite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('coursesoftprerequisite_edit', array('id' => $courseSoftPrerequisite->getId()));
        }

        return $this->render('coursesoftprerequisite/edit.html.twig', array(
            'courseSoftPrerequisite' => $courseSoftPrerequisite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a courseSoftPrerequisite entity.
     *
     * @Route("/{id}", name="coursesoftprerequisite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CourseSoftPrerequisite $courseSoftPrerequisite)
    {
        $form = $this->createDeleteForm($courseSoftPrerequisite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($courseSoftPrerequisite);
            $em->flush();
        }

        return $this->redirectToRoute('coursesoftprerequisite_index');
    }

    /**
     * Creates a form to delete a courseSoftPrerequisite entity.
     *
     * @param CourseSoftPrerequisite $courseSoftPrerequisite The courseSoftPrerequisite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CourseSoftPrerequisite $courseSoftPrerequisite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coursesoftprerequisite_delete', array('id' => $courseSoftPrerequisite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
