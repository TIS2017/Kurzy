<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CourseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Coursetype controller.
 *
 * @Route("coursetype")
 */
class CourseTypeController extends Controller
{
    /**
     * Lists all courseType entities.
     *
     * @Route("/", name="coursetype_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $courseTypes = $em->getRepository('AppBundle:CourseType')->findAll();

        if (count($courseTypes)>0) {
            $workplaces = $courseTypes[0]->usersWorkplaces($this->getUser());
        }
        else {
            $workplaces = array();
        }

        return $this->render('coursetype/index.html.twig', array(
            'courseTypes' => $courseTypes,
            'workplaces' => $workplaces,
        ));
    }

    /**
     * Creates a new courseType entity.
     *
     * @Route("/new", name="coursetype_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $courseType = new Coursetype();
        $form = $this->createForm('AppBundle\Form\CourseTypeType', $courseType);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $courseType->setDeleted(false);

            $em->persist($courseType);

            $em->flush();

            return $this->redirectToRoute('coursetype_show', array('id' => $courseType->getId()));
        }

        return $this->render('coursetype/new.html.twig', array(
            'courseType' => $courseType,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a courseType entity.
     *
     * @Route("/{id}", name="coursetype_show")
     * @Method("GET")
     */
    public function showAction(CourseType $courseType)
    {
        $deleteForm = $this->createDeleteForm($courseType);

        return $this->render('coursetype/show.html.twig', array(
            'courseType' => $courseType,
            'delete_form' => $deleteForm->createView(),
            'workplaces' => $courseType->usersWorkplaces($this->getUser()),
        ));
    }

    /**
     * Displays a form to edit an existing courseType entity.
     *
     * @Route("/{id}/edit", name="coursetype_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CourseType $courseType)
    {
        $deleteForm = $this->createDeleteForm($courseType);
        $editForm = $this->createForm('AppBundle\Form\CourseTypeType', $courseType);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('coursetype_edit', array('id' => $courseType->getId()));
        }

        return $this->render('coursetype/edit.html.twig', array(
            'courseType' => $courseType,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'workplaces' => $courseType->usersWorkplaces($this->getUser()),
        ));
    }

    /**
     * Deletes a courseType entity.
     *
     * @Route("/{id}", name="coursetype_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CourseType $courseType)
    {
        $form = $this->createDeleteForm($courseType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($courseType);
            $em->flush();
        }

        return $this->redirectToRoute('coursetype_index');
    }

    /**
     * Creates a form to delete a courseType entity.
     *
     * @param CourseType $courseType The courseType entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CourseType $courseType)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coursetype_delete', array('id' => $courseType->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
