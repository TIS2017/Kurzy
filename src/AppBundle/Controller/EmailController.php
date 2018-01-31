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
     * @Route("/sendtoAll/{id}", name="email_group")
     * @Method({"GET", "POST"})
     */
    public function groupAction(Request $request, \Swift_Mailer $mailer, CourseInstance $instance)
    {
        $email =  new Email();
        $form = $this->createForm('AppBundle\Form\EmailType', $email);

        $form->handleRequest($request);
        $users = array();
        foreach( $instance->getEnrolleds() as $i){
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




}
