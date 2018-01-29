<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CourseInstance;
use AppBundle\Entity\Email;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Email controller.
 *
 * @Route("email")
 */
class EmailController extends Controller
{

    /**
     * Creates a new email entity.
     *
     * @Route("/send/{userId}", name="email_new")
     * @ParamConverter("user", class="AppBundle:User", options={"id" = "userId"})
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, \Swift_Mailer $mailer, User $user)
    {
        $email =  new Email();
        $form = $this->createForm('AppBundle\Form\EmailType', $email);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message = (new \Swift_Message('From: '.$this->getUser()->getSelectedEmail()->getEmail().': '.$form->get('predmet')->getData()))
                ->setFrom($this->getUser()->getSelectedEmail()->getEmail())
                ->setTo($user->getSelectedEmail()->getEmail())
                ->setCharset('UTF-8')
                ->setBody(
                    $form->get('email')->getData());

            $mailer->send($message);

            return $this->render('email/send.html.twig');

        }

        return $this->render('email/new.html.twig', array(

            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new email entity.
     *
     * @Route("/send/{id}", name="email_group")
     * @Method({"GET", "POST"})
     */
    public function groupAction(Request $request, \Swift_Mailer $mailer, CourseInstance $instance)
    {
        $email =  new Email();
        $form = $this->createForm('AppBundle\Form\EmailType', $email);
        $form->handleRequest($request);
        $users = array();
        foreach( $instance->getEnrolleds() as $key => $i){
            array_push($users, $i->getUserId()->getSelectedEmail()->getEmail());
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $message = (new \Swift_Message('From: '.$this->getUser()->getSelectedEmail()->getEmail().': '.$form->get('predmet')->getData()))
                ->setFrom($this->getUser()->getSelectedEmail()->getEmail())
                ->setTo($users)
                ->setCharset('UTF-8')
                ->setBody(
                    $form->get('email')->getData());

            $mailer->send($message);

            return $this->render('email/send.html.twig');

        }

        return $this->render('email/new.html.twig', array(

            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a email entity.
     *
     * @Route("/{id}", name="email_show")
     * @Method("GET")
     */
    public function showAction(Email $email)
    {
        $deleteForm = $this->createDeleteForm($email);

        return $this->render('email/show.html.twig', array(
            'email' => $email,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing email entity.
     *
     * @Route("/{id}/edit", name="email_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Email $email)
    {
        $deleteForm = $this->createDeleteForm($email);
        $editForm = $this->createForm('AppBundle\Form\EmailType', $email);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('email_edit', array('id' => $email->getId()));
        }

        return $this->render('email/edit.html.twig', array(
            'email' => $email,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a email entity.
     *
     * @Route("/{id}", name="email_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Email $email)
    {
        $form = $this->createDeleteForm($email);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($email);
            $em->flush();
        }

        return $this->redirectToRoute('email_index');
    }

    /**
     * Creates a form to delete a email entity.
     *
     * @param Email $email The email entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Email $email)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('email_delete', array('id' => $email->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
