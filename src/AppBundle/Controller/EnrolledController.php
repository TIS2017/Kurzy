<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Enrolled;
use AppBundle\Entity\User;
use AppBundle\Form\CourseInstanceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Enrolled controller.
 *
 * @Route("enrolled")
 */
class EnrolledController extends Controller
{


    /**
     * Creates a new enrolled entity.
     *
     * @Route("/{course_instance}/new", name="enrolled_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $enrolled = new Enrolled();
        $instance = $request->attributes->get('course_instance');
        $enrolled->setCourseInstance($this->getDoctrine()->getRepository('AppBundle\\Entity\\CourseInstance')->find($instance));
        $form = $this->createForm('AppBundle\Form\EnrolledType', $enrolled);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            $enrolled->setUserId($user);

            $enrolled->setAttended(false);
            $enrolled->setGraduated(false);

            $em->persist($enrolled);


            $em->flush();

            return $this->redirectToRoute('coursetype_index');
        }

        return $this->render('enrolled/new.html.twig', array(
            'enrolled' => $enrolled,
            'form' => $form->createView(),
            'workplaces' => $enrolled->getCourseInstance()->getCourseType()->usersWorkplaces($this->getUser()),
        ));
    }

    /**
     * Finds and displays a enrolled entity.
     *
     * @Route("/{id}", name="enrolled_show")
     * @Method("GET")
     */
    public function showAction(Enrolled $enrolled)
    {
        $deleteForm = $this->createDeleteForm($enrolled);

        return $this->render('enrolled/show.html.twig', array(
            'enrolled' => $enrolled,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enrolled entity.
     *
     * @Route("/{id}/edit", name="enrolled_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Enrolled $enrolled)
    {
        $deleteForm = $this->createDeleteForm($enrolled);
        $editForm = $this->createForm('AppBundle\Form\EnrolledType', $enrolled);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('enrolled_edit', array('id' => $enrolled->getId()));
        }

        return $this->render('enrolled/edit.html.twig', array(
            'enrolled' => $enrolled,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a enrolled entity.
     *
     * @Route("/{id}", name="enrolled_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Enrolled $enrolled)
    {
        $form = $this->createDeleteForm($enrolled);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enrolled);
            $em->flush();
        }

        return $this->redirectToRoute('coursetype_index');
    }

    /**
     * Creates a form to delete a enrolled entity.
     *
     * @param Enrolled $enrolled The enrolled entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enrolled $enrolled)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enrolled_delete', array('id' => $enrolled->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
