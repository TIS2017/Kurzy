<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 23.1.2018
 * Time: 12:44
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route("/", name="login")
     */

    public function login(Request $request, AuthenticationUtils $authUtils)
    {


        if($this->getUser()){
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
        else {
            // get the login error if there is one
            $error = $authUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authUtils->getLastUsername();

            return $this->render('security/login.html.twig', array(
                'last_username' => $lastUsername,
                'error' => $error,
            ));
        }
    }
}