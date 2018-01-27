<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CourseInstance;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Courseinstance controller.
 *
 * @Route("courseinstance")
 */
class CourseInstanceController extends Controller
{
    /**
     * Lists all courseInstance entities.
     *
     * @Route("/", name="courseinstance_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $courseInstances = $em->getRepository('AppBundle:CourseInstance')->findAll();

        return $this->render('courseinstance/index.html.twig', array(
            'courseInstances' => $courseInstances,
        ));
    }

    /**
     * Creates a new courseInstance entity.
     *
     * @Route("/new", name="courseinstance_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $courseInstance = new Courseinstance();
        $form = $this->createForm('AppBundle\Form\CourseInstanceType', $courseInstance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($courseInstance->getSupervisor()->getRole()->getId() < 2) {
                $role = $em->getRepository('AppBundle:CourseType')->find(2);
                $courseInstance->getSupervisor()->setRole($role);
            }

            $em->persist($courseInstance);
            $em->flush();

            return $this->redirectToRoute('coursetype_show', array('id' => $courseInstance->getCourseType()->getId()));
        }

        return $this->render('courseinstance/new.html.twig', array(
            'courseInstance' => $courseInstance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a courseInstance entity and allows to edit its enrolleds.
     *
     * @Route("/{id}", name="courseinstance_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Request $request, CourseInstance $courseInstance)
    {
        $editForm = $this->createForm('AppBundle\Form\EnrolledListType', $courseInstance);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('courseinstance_show', array('id' => ($courseInstance->getId())));
        }


        return $this->render('courseinstance/show.html.twig', array(
            'courseInstance' => $courseInstance,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing courseInstance entity.
     *
     * @Route("/{id}/edit", name="courseinstance_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CourseInstance $courseInstance)
    {
        $deleteForm = $this->createDeleteForm($courseInstance);
        $editForm = $this->createForm('AppBundle\Form\CourseInstanceType', $courseInstance);
        $editForm->remove('courseType');
        $editForm->remove('supervisor');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('supervised', array('id' => ($courseInstance->getSupervisor())->getId()));
        }

        return $this->render('courseinstance/edit.html.twig', array(
            'courseInstance' => $courseInstance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'workplaces' => $courseInstance->getCourseType()->usersWorkplaces($this->getUser()),
        ));
    }

    /**
     * Deletes a courseInstance entity.
     *
     * @Route("/{id}", name="courseinstance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CourseInstance $courseInstance)
    {
        $form = $this->createDeleteForm($courseInstance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($courseInstance);
            $em->flush();
        }

        return $this->redirectToRoute('courseinstance_index');
    }

    /**
     * Creates a form to delete a courseInstance entity.
     *
     * @param CourseInstance $courseInstance The courseInstance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CourseInstance $courseInstance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('courseinstance_delete', array('id' => $courseInstance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Displays courseInstances supervised by logged user.
     *
     * @Route("/{id}/supervised", name="supervised")
     * @Method("GET")
     */
    public function supervisedCourses(User $supervisor)
    {
        $em = $this->getDoctrine()->getManager();
        $courseInstances = $em->getRepository('AppBundle:CourseInstance')->findBy(array('supervisor'=>$supervisor));
        return $this->render('courseinstance/supervised.html.twig',array(
            'courseInstances' => $courseInstances, 'supervisor'=>$supervisor
        ));
    }


    /**
     * Export to PDF
     *
     * @Route("/{id}/pdf", name="enrolled_users_pdf")
     */
    public function pdfAction(CourseInstance $courseInstance)
    {
        $html = $this->renderView('courseinstance/pdf.html.twig', array('courseInstance' => $courseInstance));

        $filename = sprintf('enrolled_users_%s.pdf', $courseInstance->getCourseType());

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }


}
